<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CdiInputSpecification $CdiInputSpecification
 * @property 'STANDARD'|'SINGLE_PIPELINE' $ChannelClass
 * @property list<Shapes\OutputDestination> $Destinations
 * @property Shapes\EncoderSettings $EncoderSettings
 * @property list<Shapes\InputAttachment> $InputAttachments
 * @property Shapes\InputSpecification $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED' $LogLevel
 * @property Shapes\MaintenanceCreateSettings $Maintenance
 * @property string $Name
 * @property string $RequestId
 * @property string $Reserved
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property Shapes\VpcOutputSettings $Vpc
 * @property Shapes\AnywhereSettings $AnywhereSettings
 * @property Shapes\ChannelEngineVersionRequest $ChannelEngineVersion
 * @property bool $DryRun
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     CdiInputSpecification?: Shapes\CdiInputSpecification,
     *     ChannelClass?: 'STANDARD'|'SINGLE_PIPELINE',
     *     Destinations?: list<Shapes\OutputDestination>,
     *     EncoderSettings?: Shapes\EncoderSettings,
     *     InputAttachments?: list<Shapes\InputAttachment>,
     *     InputSpecification?: Shapes\InputSpecification,
     *     LogLevel?: 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED',
     *     Maintenance?: Shapes\MaintenanceCreateSettings,
     *     Name?: string,
     *     RequestId?: string,
     *     Reserved?: string,
     *     RoleArn?: string,
     *     Tags?: array<string, string>,
     *     Vpc?: Shapes\VpcOutputSettings,
     *     AnywhereSettings?: Shapes\AnywhereSettings,
     *     ChannelEngineVersion?: Shapes\ChannelEngineVersionRequest,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
