<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\UpdateSuiteDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $suiteDefinitionName
 * @property list<DeviceUnderTest>|null $devices
 * @property bool|null $intendedForQualification
 * @property bool|null $isLongDurationTest
 * @property string $rootGroup
 * @property string $devicePermissionRoleArn
 * @property 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket'|null $protocol
 */
class SuiteDefinitionConfiguration extends Shape
{
    /**
     * @param array{
     *     suiteDefinitionName: string,
     *     devices?: list<DeviceUnderTest>|null,
     *     intendedForQualification?: bool|null,
     *     isLongDurationTest?: bool|null,
     *     rootGroup: string,
     *     devicePermissionRoleArn: string,
     *     protocol?: 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
