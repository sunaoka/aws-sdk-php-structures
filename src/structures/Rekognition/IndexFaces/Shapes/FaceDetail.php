<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox|null $BoundingBox
 * @property AgeRange|null $AgeRange
 * @property Smile|null $Smile
 * @property Eyeglasses|null $Eyeglasses
 * @property Sunglasses|null $Sunglasses
 * @property Gender|null $Gender
 * @property Beard|null $Beard
 * @property Mustache|null $Mustache
 * @property EyeOpen|null $EyesOpen
 * @property MouthOpen|null $MouthOpen
 * @property list<Emotion>|null $Emotions
 * @property list<Landmark>|null $Landmarks
 * @property Pose|null $Pose
 * @property ImageQuality|null $Quality
 * @property float|null $Confidence
 * @property FaceOccluded|null $FaceOccluded
 * @property EyeDirection|null $EyeDirection
 */
class FaceDetail extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox|null,
     *     AgeRange?: AgeRange|null,
     *     Smile?: Smile|null,
     *     Eyeglasses?: Eyeglasses|null,
     *     Sunglasses?: Sunglasses|null,
     *     Gender?: Gender|null,
     *     Beard?: Beard|null,
     *     Mustache?: Mustache|null,
     *     EyesOpen?: EyeOpen|null,
     *     MouthOpen?: MouthOpen|null,
     *     Emotions?: list<Emotion>|null,
     *     Landmarks?: list<Landmark>|null,
     *     Pose?: Pose|null,
     *     Quality?: ImageQuality|null,
     *     Confidence?: float|null,
     *     FaceOccluded?: FaceOccluded|null,
     *     EyeDirection?: EyeDirection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
