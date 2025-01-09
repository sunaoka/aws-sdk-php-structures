<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $ThumbnailPattern
 * @property Encryption $ThumbnailEncryption
 * @property string $Rotate
 * @property string $PresetId
 * @property string $SegmentDuration
 * @property list<JobWatermark> $Watermarks
 * @property JobAlbumArt $AlbumArt
 * @property list<Clip> $Composition
 * @property Captions $Captions
 * @property Encryption $Encryption
 */
class CreateJobOutput extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     ThumbnailPattern?: string,
     *     ThumbnailEncryption?: Encryption,
     *     Rotate?: string,
     *     PresetId?: string,
     *     SegmentDuration?: string,
     *     Watermarks?: list<JobWatermark>,
     *     AlbumArt?: JobAlbumArt,
     *     Composition?: list<Clip>,
     *     Captions?: Captions,
     *     Encryption?: Encryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
