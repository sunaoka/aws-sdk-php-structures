<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FaceId
 * @property string $UserId
 * @property list<'ASSOCIATED_TO_AN_EXISTING_USER'|'FACE_NOT_FOUND'> $Reasons
 */
class UnsuccessfulFaceDeletion extends Shape
{
    /**
     * @param array{
     *     FaceId?: string,
     *     UserId?: string,
     *     Reasons?: list<'ASSOCIATED_TO_AN_EXISTING_USER'|'FACE_NOT_FOUND'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
