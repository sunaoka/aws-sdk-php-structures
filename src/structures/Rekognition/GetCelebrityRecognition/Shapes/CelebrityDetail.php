<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Urls
 * @property string $Name
 * @property string $Id
 * @property float $Confidence
 * @property BoundingBox $BoundingBox
 * @property FaceDetail $Face
 * @property KnownGender $KnownGender
 */
class CelebrityDetail extends Shape
{
    /**
     * @param array{
     *     Urls?: list<string>,
     *     Name?: string,
     *     Id?: string,
     *     Confidence?: float,
     *     BoundingBox?: BoundingBox,
     *     Face?: FaceDetail,
     *     KnownGender?: KnownGender
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
