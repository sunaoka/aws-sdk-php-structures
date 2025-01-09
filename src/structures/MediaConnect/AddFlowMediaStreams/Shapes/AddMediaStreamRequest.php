<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowMediaStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaStreamAttributesRequest $Attributes
 * @property int $ClockRate
 * @property string $Description
 * @property int $MediaStreamId
 * @property string $MediaStreamName
 * @property 'video'|'audio'|'ancillary-data' $MediaStreamType
 * @property string $VideoFormat
 */
class AddMediaStreamRequest extends Shape
{
    /**
     * @param array{
     *     Attributes?: MediaStreamAttributesRequest,
     *     ClockRate?: int,
     *     Description?: string,
     *     MediaStreamId: int,
     *     MediaStreamName: string,
     *     MediaStreamType: 'video'|'audio'|'ancillary-data',
     *     VideoFormat?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
