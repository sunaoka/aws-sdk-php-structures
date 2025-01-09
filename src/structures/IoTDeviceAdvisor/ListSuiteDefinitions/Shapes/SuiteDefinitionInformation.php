<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionName
 * @property list<DeviceUnderTest> $defaultDevices
 * @property bool $intendedForQualification
 * @property bool $isLongDurationTest
 * @property 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket' $protocol
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class SuiteDefinitionInformation extends Shape
{
    /**
     * @param array{
     *     suiteDefinitionId?: string,
     *     suiteDefinitionName?: string,
     *     defaultDevices?: list<DeviceUnderTest>,
     *     intendedForQualification?: bool,
     *     isLongDurationTest?: bool,
     *     protocol?: 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket',
     *     createdAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
