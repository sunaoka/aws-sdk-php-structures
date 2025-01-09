<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupId
 * @property string $groupName
 * @property list<TestCaseRun> $tests
 */
class GroupResult extends Shape
{
    /**
     * @param array{
     *     groupId?: string,
     *     groupName?: string,
     *     tests?: list<TestCaseRun>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
