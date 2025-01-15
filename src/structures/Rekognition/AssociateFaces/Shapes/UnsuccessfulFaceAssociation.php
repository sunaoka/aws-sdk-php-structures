<?php

namespace Sunaoka\Aws\Structures\Rekognition\AssociateFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FaceId
 * @property string|null $UserId
 * @property float|null $Confidence
 * @property list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'|'LOW_MATCH_CONFIDENCE'>|null $Reasons
 */
class UnsuccessfulFaceAssociation extends Shape
{
    /**
     * @param array{
     *     FaceId?: string|null,
     *     UserId?: string|null,
     *     Confidence?: float|null,
     *     Reasons?: list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'|'LOW_MATCH_CONFIDENCE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
