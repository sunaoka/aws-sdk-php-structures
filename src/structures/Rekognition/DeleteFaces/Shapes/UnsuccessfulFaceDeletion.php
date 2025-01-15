<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FaceId
 * @property string|null $UserId
 * @property list<'ASSOCIATED_TO_AN_EXISTING_USER'|'FACE_NOT_FOUND'>|null $Reasons
 */
class UnsuccessfulFaceDeletion extends Shape
{
    /**
     * @param array{
     *     FaceId?: string|null,
     *     UserId?: string|null,
     *     Reasons?: list<'ASSOCIATED_TO_AN_EXISTING_USER'|'FACE_NOT_FOUND'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
