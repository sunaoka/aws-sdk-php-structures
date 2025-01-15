<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Urls
 * @property string|null $Name
 * @property string|null $Id
 * @property ComparedFace|null $Face
 * @property float|null $MatchConfidence
 * @property KnownGender|null $KnownGender
 */
class Celebrity extends Shape
{
    /**
     * @param array{
     *     Urls?: list<string>|null,
     *     Name?: string|null,
     *     Id?: string|null,
     *     Face?: ComparedFace|null,
     *     MatchConfidence?: float|null,
     *     KnownGender?: KnownGender|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
