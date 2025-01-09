<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StartSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeviceUnderTest $primaryDevice
 * @property list<string> $selectedTestList
 * @property bool $parallelRun
 */
class SuiteRunConfiguration extends Shape
{
    /**
     * @param array{
     *     primaryDevice: DeviceUnderTest,
     *     selectedTestList?: list<string>,
     *     parallelRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
