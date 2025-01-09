<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaStreamAttributes $Attributes
 * @property int $ClockRate
 * @property string $Description
 * @property int $Fmt
 * @property int $MediaStreamId
 * @property string $MediaStreamName
 * @property 'video'|'audio'|'ancillary-data' $MediaStreamType
 * @property string $VideoFormat
 */
class MediaStream extends Shape
{
    /**
     * @param array{
     *     Attributes?: MediaStreamAttributes,
     *     ClockRate?: int,
     *     Description?: string,
     *     Fmt: int,
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
