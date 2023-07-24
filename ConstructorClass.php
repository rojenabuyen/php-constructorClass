<?php
class Constructor {
    private $data;

    public function __construct($array) {
        $this->data = $array;
    }

    private function bubbleSort() {
        $n = count($this->data);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($this->data[$j] > $this->data[$j + 1]) {
                    // Swap the elements
                    $temp = $this->data[$j];
                    $this->data[$j] = $this->data[$j + 1];
                    $this->data[$j + 1] = $temp;
                }
            }
        }
    }

    public function getMedian() {
        $this->bubbleSort();
        $n = count($this->data);
        $mid = $n / 2;

        if ($n % 2 == 0) {
            return ($this->data[$mid - 1] + $this->data[$mid]) / 2;
        } else {
            return $this->data[floor($mid)];
        }
    }

    public function getLargestValue() {
        $this->bubbleSort();
        $n = count($this->data);
        return $this->data[$n - 1];
    }
}

class MainClass {
    public function __construct($array) {
        $constructor = new Constructor($array);
        echo "original" . implode(', ', $array);
        echo "Median " . $constructor->getMedian();
        echo "Largest Value " . $constructor->getLargestValue();
    }
}

$exampleArray = [12, 5, 8, 1, 25, 17];
$mainClass = new MainClass($exampleArray);

