<?php

namespace Sunaoka\Aws\Structures\Rekognition\AssociateFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FaceId
 * @property string $UserId
 * @property float $Confidence
 * @property list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'|'LOW_MATCH_CONFIDENCE'> $Reasons
 */
class UnsuccessfulFaceAssociation extends Shape
{
    /**
     * @param array{
     *     FaceId?: string,
     *     UserId?: string,
     *     Confidence?: float,
     *     Reasons?: list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'|'LOW_MATCH_CONFIDENCE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
