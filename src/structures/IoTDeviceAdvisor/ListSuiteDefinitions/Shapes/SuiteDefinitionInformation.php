<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $suiteDefinitionId
 * @property string|null $suiteDefinitionName
 * @property list<DeviceUnderTest>|null $defaultDevices
 * @property bool|null $intendedForQualification
 * @property bool|null $isLongDurationTest
 * @property 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket'|null $protocol
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class SuiteDefinitionInformation extends Shape
{
    /**
     * @param array{
     *     suiteDefinitionId?: string|null,
     *     suiteDefinitionName?: string|null,
     *     defaultDevices?: list<DeviceUnderTest>|null,
     *     intendedForQualification?: bool|null,
     *     isLongDurationTest?: bool|null,
     *     protocol?: 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
