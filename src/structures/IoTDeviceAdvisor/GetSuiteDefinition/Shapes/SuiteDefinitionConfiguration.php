<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $suiteDefinitionName
 * @property list<DeviceUnderTest> $devices
 * @property bool $intendedForQualification
 * @property bool $isLongDurationTest
 * @property string $rootGroup
 * @property string $devicePermissionRoleArn
 * @property 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket' $protocol
 */
class SuiteDefinitionConfiguration extends Shape
{
    /**
     * @param array{
     *     suiteDefinitionName: string,
     *     devices?: list<DeviceUnderTest>,
     *     intendedForQualification?: bool,
     *     isLongDurationTest?: bool,
     *     rootGroup: string,
     *     devicePermissionRoleArn: string,
     *     protocol?: 'MqttV3_1_1'|'MqttV5'|'MqttV3_1_1_OverWebSocket'|'MqttV5_OverWebSocket'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
