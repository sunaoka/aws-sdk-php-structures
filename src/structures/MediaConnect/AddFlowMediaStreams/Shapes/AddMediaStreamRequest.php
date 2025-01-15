<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowMediaStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaStreamAttributesRequest|null $Attributes
 * @property int|null $ClockRate
 * @property string|null $Description
 * @property int $MediaStreamId
 * @property string $MediaStreamName
 * @property 'video'|'audio'|'ancillary-data' $MediaStreamType
 * @property string|null $VideoFormat
 */
class AddMediaStreamRequest extends Shape
{
    /**
     * @param array{
     *     Attributes?: MediaStreamAttributesRequest|null,
     *     ClockRate?: int|null,
     *     Description?: string|null,
     *     MediaStreamId: int,
     *     MediaStreamName: string,
     *     MediaStreamType: 'video'|'audio'|'ancillary-data',
     *     VideoFormat?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
