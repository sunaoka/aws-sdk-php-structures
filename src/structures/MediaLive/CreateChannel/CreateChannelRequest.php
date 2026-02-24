<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CdiInputSpecification|null $CdiInputSpecification
 * @property 'STANDARD'|'SINGLE_PIPELINE'|null $ChannelClass
 * @property list<Shapes\OutputDestination>|null $Destinations
 * @property Shapes\EncoderSettings|null $EncoderSettings
 * @property list<Shapes\InputAttachment>|null $InputAttachments
 * @property Shapes\InputSpecification|null $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED'|null $LogLevel
 * @property Shapes\MaintenanceCreateSettings|null $Maintenance
 * @property string|null $Name
 * @property string|null $RequestId
 * @property string|null $Reserved
 * @property string|null $RoleArn
 * @property array<string, string>|null $Tags
 * @property Shapes\VpcOutputSettings|null $Vpc
 * @property Shapes\AnywhereSettings|null $AnywhereSettings
 * @property Shapes\ChannelEngineVersionRequest|null $ChannelEngineVersion
 * @property bool|null $DryRun
 * @property Shapes\LinkedChannelSettings|null $LinkedChannelSettings
 * @property list<string>|null $ChannelSecurityGroups
 * @property Shapes\InferenceSettings|null $InferenceSettings
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     CdiInputSpecification?: Shapes\CdiInputSpecification|null,
     *     ChannelClass?: 'STANDARD'|'SINGLE_PIPELINE'|null,
     *     Destinations?: list<Shapes\OutputDestination>|null,
     *     EncoderSettings?: Shapes\EncoderSettings|null,
     *     InputAttachments?: list<Shapes\InputAttachment>|null,
     *     InputSpecification?: Shapes\InputSpecification|null,
     *     LogLevel?: 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED'|null,
     *     Maintenance?: Shapes\MaintenanceCreateSettings|null,
     *     Name?: string|null,
     *     RequestId?: string|null,
     *     Reserved?: string|null,
     *     RoleArn?: string|null,
     *     Tags?: array<string, string>|null,
     *     Vpc?: Shapes\VpcOutputSettings|null,
     *     AnywhereSettings?: Shapes\AnywhereSettings|null,
     *     ChannelEngineVersion?: Shapes\ChannelEngineVersionRequest|null,
     *     DryRun?: bool|null,
     *     LinkedChannelSettings?: Shapes\LinkedChannelSettings|null,
     *     ChannelSecurityGroups?: list<string>|null,
     *     InferenceSettings?: Shapes\InferenceSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
