<?php

namespace Sunaoka\Aws\Structures\Rekognition\DisassociateFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FaceId
 * @property string $UserId
 * @property list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'> $Reasons
 */
class UnsuccessfulFaceDisassociation extends Shape
{
    /**
     * @param array{
     *     FaceId?: string,
     *     UserId?: string,
     *     Reasons?: list<'FACE_NOT_FOUND'|'ASSOCIATED_TO_A_DIFFERENT_USER'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
