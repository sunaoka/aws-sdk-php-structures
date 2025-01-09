<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CdiInputSpecification $CdiInputSpecification
 * @property string $ChannelId
 * @property list<Shapes\OutputDestination> $Destinations
 * @property Shapes\EncoderSettings $EncoderSettings
 * @property list<Shapes\InputAttachment> $InputAttachments
 * @property Shapes\InputSpecification $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED' $LogLevel
 * @property Shapes\MaintenanceUpdateSettings $Maintenance
 * @property string $Name
 * @property string $RoleArn
 * @property Shapes\ChannelEngineVersionRequest $ChannelEngineVersion
 * @property bool $DryRun
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     CdiInputSpecification?: Shapes\CdiInputSpecification,
     *     ChannelId: string,
     *     Destinations?: list<Shapes\OutputDestination>,
     *     EncoderSettings?: Shapes\EncoderSettings,
     *     InputAttachments?: list<Shapes\InputAttachment>,
     *     InputSpecification?: Shapes\InputSpecification,
     *     LogLevel?: 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED',
     *     Maintenance?: Shapes\MaintenanceUpdateSettings,
     *     Name?: string,
     *     RoleArn?: string,
     *     ChannelEngineVersion?: Shapes\ChannelEngineVersionRequest,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
