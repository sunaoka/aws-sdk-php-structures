<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $ThumbnailPattern
 * @property Encryption|null $ThumbnailEncryption
 * @property string|null $Rotate
 * @property string|null $PresetId
 * @property string|null $SegmentDuration
 * @property list<JobWatermark>|null $Watermarks
 * @property JobAlbumArt|null $AlbumArt
 * @property list<Clip>|null $Composition
 * @property Captions|null $Captions
 * @property Encryption|null $Encryption
 */
class CreateJobOutput extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     ThumbnailPattern?: string|null,
     *     ThumbnailEncryption?: Encryption|null,
     *     Rotate?: string|null,
     *     PresetId?: string|null,
     *     SegmentDuration?: string|null,
     *     Watermarks?: list<JobWatermark>|null,
     *     AlbumArt?: JobAlbumArt|null,
     *     Composition?: list<Clip>|null,
     *     Captions?: Captions|null,
     *     Encryption?: Encryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
