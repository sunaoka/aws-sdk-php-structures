<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaStreamAttributes|null $Attributes
 * @property int|null $ClockRate
 * @property string|null $Description
 * @property int $Fmt
 * @property int $MediaStreamId
 * @property string $MediaStreamName
 * @property 'video'|'audio'|'ancillary-data' $MediaStreamType
 * @property string|null $VideoFormat
 */
class MediaStream extends Shape
{
    /**
     * @param array{
     *     Attributes?: MediaStreamAttributes|null,
     *     ClockRate?: int|null,
     *     Description?: string|null,
     *     Fmt: int,
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
