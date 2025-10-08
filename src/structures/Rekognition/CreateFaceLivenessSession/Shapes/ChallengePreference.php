<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FaceMovementAndLightChallenge'|'FaceMovementChallenge' $Type
 * @property Versions|null $Versions
 */
class ChallengePreference extends Shape
{
    /**
     * @param array{
     *     Type: 'FaceMovementAndLightChallenge'|'FaceMovementChallenge',
     *     Versions?: Versions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
