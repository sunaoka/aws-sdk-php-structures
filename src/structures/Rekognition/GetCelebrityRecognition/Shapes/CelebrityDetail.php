<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Urls
 * @property string|null $Name
 * @property string|null $Id
 * @property float|null $Confidence
 * @property BoundingBox|null $BoundingBox
 * @property FaceDetail|null $Face
 * @property KnownGender|null $KnownGender
 */
class CelebrityDetail extends Shape
{
    /**
     * @param array{
     *     Urls?: list<string>|null,
     *     Name?: string|null,
     *     Id?: string|null,
     *     Confidence?: float|null,
     *     BoundingBox?: BoundingBox|null,
     *     Face?: FaceDetail|null,
     *     KnownGender?: KnownGender|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
