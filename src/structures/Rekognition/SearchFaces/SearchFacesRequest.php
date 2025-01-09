<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $FaceId
 * @property int $MaxFaces
 * @property float $FaceMatchThreshold
 */
class SearchFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     FaceId: string,
     *     MaxFaces?: int,
     *     FaceMatchThreshold?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
