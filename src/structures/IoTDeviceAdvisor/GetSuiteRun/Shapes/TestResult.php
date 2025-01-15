<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GroupResult>|null $groups
 */
class TestResult extends Shape
{
    /**
     * @param array{groups?: list<GroupResult>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
