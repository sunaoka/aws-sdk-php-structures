<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeProtectConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProtectConfigurationArn
 * @property string $ProtectConfigurationId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property bool $AccountDefault
 * @property bool $DeletionProtectionEnabled
 */
class ProtectConfigurationInformation extends Shape
{
    /**
     * @param array{
     *     ProtectConfigurationArn: string,
     *     ProtectConfigurationId: string,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     AccountDefault: bool,
     *     DeletionProtectionEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
