<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowMediaStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MediaStreamAttributesRequest|null $Attributes
 * @property int|null $ClockRate
 * @property string|null $Description
 * @property string $FlowArn
 * @property string $MediaStreamName
 * @property 'video'|'audio'|'ancillary-data'|null $MediaStreamType
 * @property string|null $VideoFormat
 */
class UpdateFlowMediaStreamRequest extends Request
{
    /**
     * @param array{
     *     Attributes?: Shapes\MediaStreamAttributesRequest|null,
     *     ClockRate?: int|null,
     *     Description?: string|null,
     *     FlowArn: string,
     *     MediaStreamName: string,
     *     MediaStreamType?: 'video'|'audio'|'ancillary-data'|null,
     *     VideoFormat?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
