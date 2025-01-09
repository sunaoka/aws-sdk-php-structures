<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Key
 * @property string $ThumbnailPattern
 * @property Encryption $ThumbnailEncryption
 * @property string $Rotate
 * @property string $PresetId
 * @property string $SegmentDuration
 * @property string $Status
 * @property string $StatusDetail
 * @property int $Duration
 * @property int $Width
 * @property int $Height
 * @property string $FrameRate
 * @property int $FileSize
 * @property int $DurationMillis
 * @property list<JobWatermark> $Watermarks
 * @property JobAlbumArt $AlbumArt
 * @property list<Clip> $Composition
 * @property Captions $Captions
 * @property Encryption $Encryption
 * @property string $AppliedColorSpaceConversion
 */
class JobOutput extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Key?: string,
     *     ThumbnailPattern?: string,
     *     ThumbnailEncryption?: Encryption,
     *     Rotate?: string,
     *     PresetId?: string,
     *     SegmentDuration?: string,
     *     Status?: string,
     *     StatusDetail?: string,
     *     Duration?: int,
     *     Width?: int,
     *     Height?: int,
     *     FrameRate?: string,
     *     FileSize?: int,
     *     DurationMillis?: int,
     *     Watermarks?: list<JobWatermark>,
     *     AlbumArt?: JobAlbumArt,
     *     Composition?: list<Clip>,
     *     Captions?: Captions,
     *     Encryption?: Encryption,
     *     AppliedColorSpaceConversion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
