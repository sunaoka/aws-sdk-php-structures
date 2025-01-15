<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupId
 * @property string|null $groupName
 * @property list<TestCaseRun>|null $tests
 */
class GroupResult extends Shape
{
    /**
     * @param array{
     *     groupId?: string|null,
     *     groupName?: string|null,
     *     tests?: list<TestCaseRun>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
