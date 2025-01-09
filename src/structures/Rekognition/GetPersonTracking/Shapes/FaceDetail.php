<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox $BoundingBox
 * @property AgeRange $AgeRange
 * @property Smile $Smile
 * @property Eyeglasses $Eyeglasses
 * @property Sunglasses $Sunglasses
 * @property Gender $Gender
 * @property Beard $Beard
 * @property Mustache $Mustache
 * @property EyeOpen $EyesOpen
 * @property MouthOpen $MouthOpen
 * @property list<Emotion> $Emotions
 * @property list<Landmark> $Landmarks
 * @property Pose $Pose
 * @property ImageQuality $Quality
 * @property float $Confidence
 * @property FaceOccluded $FaceOccluded
 * @property EyeDirection $EyeDirection
 */
class FaceDetail extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox,
     *     AgeRange?: AgeRange,
     *     Smile?: Smile,
     *     Eyeglasses?: Eyeglasses,
     *     Sunglasses?: Sunglasses,
     *     Gender?: Gender,
     *     Beard?: Beard,
     *     Mustache?: Mustache,
     *     EyesOpen?: EyeOpen,
     *     MouthOpen?: MouthOpen,
     *     Emotions?: list<Emotion>,
     *     Landmarks?: list<Landmark>,
     *     Pose?: Pose,
     *     Quality?: ImageQuality,
     *     Confidence?: float,
     *     FaceOccluded?: FaceOccluded,
     *     EyeDirection?: EyeDirection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
