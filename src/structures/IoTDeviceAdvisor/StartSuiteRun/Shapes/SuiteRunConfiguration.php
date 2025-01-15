<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StartSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeviceUnderTest $primaryDevice
 * @property list<string>|null $selectedTestList
 * @property bool|null $parallelRun
 */
class SuiteRunConfiguration extends Shape
{
    /**
     * @param array{
     *     primaryDevice: DeviceUnderTest,
     *     selectedTestList?: list<string>|null,
     *     parallelRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
