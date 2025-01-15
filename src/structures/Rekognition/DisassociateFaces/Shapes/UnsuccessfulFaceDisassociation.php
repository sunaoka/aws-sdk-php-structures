<?php

namespace Sunaoka\Aws\Structures\Rekognition\DisassociateFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FaceId
 * @property string|null $UserId
 * @property list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'>|null $Reasons
 */
class UnsuccessfulFaceDisassociation extends Shape
{
    /**
     * @param array{
     *     FaceId?: string|null,
     *     UserId?: string|null,
     *     Reasons?: list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
