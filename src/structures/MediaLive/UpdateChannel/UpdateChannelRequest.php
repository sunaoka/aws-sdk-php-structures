<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CdiInputSpecification|null $CdiInputSpecification
 * @property string $ChannelId
 * @property list<Shapes\OutputDestination>|null $Destinations
 * @property Shapes\EncoderSettings|null $EncoderSettings
 * @property list<Shapes\InputAttachment>|null $InputAttachments
 * @property Shapes\InputSpecification|null $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED'|null $LogLevel
 * @property Shapes\MaintenanceUpdateSettings|null $Maintenance
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property Shapes\ChannelEngineVersionRequest|null $ChannelEngineVersion
 * @property bool|null $DryRun
 * @property Shapes\AnywhereSettings|null $AnywhereSettings
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     CdiInputSpecification?: Shapes\CdiInputSpecification|null,
     *     ChannelId: string,
     *     Destinations?: list<Shapes\OutputDestination>|null,
     *     EncoderSettings?: Shapes\EncoderSettings|null,
     *     InputAttachments?: list<Shapes\InputAttachment>|null,
     *     InputSpecification?: Shapes\InputSpecification|null,
     *     LogLevel?: 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED'|null,
     *     Maintenance?: Shapes\MaintenanceUpdateSettings|null,
     *     Name?: string|null,
     *     RoleArn?: string|null,
     *     ChannelEngineVersion?: Shapes\ChannelEngineVersionRequest|null,
     *     DryRun?: bool|null,
     *     AnywhereSettings?: Shapes\AnywhereSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
