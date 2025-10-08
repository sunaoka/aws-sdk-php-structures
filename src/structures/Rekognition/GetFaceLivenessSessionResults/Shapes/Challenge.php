<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FaceMovementAndLightChallenge'|'FaceMovementChallenge' $Type
 * @property string $Version
 */
class Challenge extends Shape
{
    /**
     * @param array{
     *     Type: 'FaceMovementAndLightChallenge'|'FaceMovementChallenge',
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
