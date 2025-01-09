<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox $BoundingBox
 * @property float $Confidence
 * @property list<Landmark> $Landmarks
 * @property Pose $Pose
 * @property ImageQuality $Quality
 * @property list<Emotion> $Emotions
 * @property Smile $Smile
 */
class ComparedFace extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox,
     *     Confidence?: float,
     *     Landmarks?: list<Landmark>,
     *     Pose?: Pose,
     *     Quality?: ImageQuality,
     *     Emotions?: list<Emotion>,
     *     Smile?: Smile
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
