<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Urls
 * @property string $Name
 * @property string $Id
 * @property ComparedFace $Face
 * @property float $MatchConfidence
 * @property KnownGender $KnownGender
 */
class Celebrity extends Shape
{
    /**
     * @param array{
     *     Urls?: list<string>,
     *     Name?: string,
     *     Id?: string,
     *     Face?: ComparedFace,
     *     MatchConfidence?: float,
     *     KnownGender?: KnownGender
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
