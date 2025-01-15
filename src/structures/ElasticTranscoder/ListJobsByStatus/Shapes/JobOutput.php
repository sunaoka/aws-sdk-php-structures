<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Key
 * @property string|null $ThumbnailPattern
 * @property Encryption|null $ThumbnailEncryption
 * @property string|null $Rotate
 * @property string|null $PresetId
 * @property string|null $SegmentDuration
 * @property string|null $Status
 * @property string|null $StatusDetail
 * @property int|null $Duration
 * @property int|null $Width
 * @property int|null $Height
 * @property string|null $FrameRate
 * @property int|null $FileSize
 * @property int|null $DurationMillis
 * @property list<JobWatermark>|null $Watermarks
 * @property JobAlbumArt|null $AlbumArt
 * @property list<Clip>|null $Composition
 * @property Captions|null $Captions
 * @property Encryption|null $Encryption
 * @property string|null $AppliedColorSpaceConversion
 */
class JobOutput extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Key?: string|null,
     *     ThumbnailPattern?: string|null,
     *     ThumbnailEncryption?: Encryption|null,
     *     Rotate?: string|null,
     *     PresetId?: string|null,
     *     SegmentDuration?: string|null,
     *     Status?: string|null,
     *     StatusDetail?: string|null,
     *     Duration?: int|null,
     *     Width?: int|null,
     *     Height?: int|null,
     *     FrameRate?: string|null,
     *     FileSize?: int|null,
     *     DurationMillis?: int|null,
     *     Watermarks?: list<JobWatermark>|null,
     *     AlbumArt?: JobAlbumArt|null,
     *     Composition?: list<Clip>|null,
     *     Captions?: Captions|null,
     *     Encryption?: Encryption|null,
     *     AppliedColorSpaceConversion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
