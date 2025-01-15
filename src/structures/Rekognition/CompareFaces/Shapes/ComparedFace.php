<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox|null $BoundingBox
 * @property float|null $Confidence
 * @property list<Landmark>|null $Landmarks
 * @property Pose|null $Pose
 * @property ImageQuality|null $Quality
 * @property list<Emotion>|null $Emotions
 * @property Smile|null $Smile
 */
class ComparedFace extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox|null,
     *     Confidence?: float|null,
     *     Landmarks?: list<Landmark>|null,
     *     Pose?: Pose|null,
     *     Quality?: ImageQuality|null,
     *     Emotions?: list<Emotion>|null,
     *     Smile?: Smile|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
