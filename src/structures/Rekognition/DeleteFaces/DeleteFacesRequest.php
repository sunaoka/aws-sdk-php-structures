<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property list<string> $FaceIds
 */
class DeleteFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     FaceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
