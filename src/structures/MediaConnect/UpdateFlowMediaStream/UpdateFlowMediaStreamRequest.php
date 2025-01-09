<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowMediaStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MediaStreamAttributesRequest $Attributes
 * @property int $ClockRate
 * @property string $Description
 * @property string $FlowArn
 * @property string $MediaStreamName
 * @property 'video'|'audio'|'ancillary-data' $MediaStreamType
 * @property string $VideoFormat
 */
class UpdateFlowMediaStreamRequest extends Request
{
    /**
     * @param array{
     *     Attributes?: Shapes\MediaStreamAttributesRequest,
     *     ClockRate?: int,
     *     Description?: string,
     *     FlowArn: string,
     *     MediaStreamName: string,
     *     MediaStreamType?: 'video'|'audio'|'ancillary-data',
     *     VideoFormat?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
