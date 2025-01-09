<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $FaceId
 * @property int<1, 4096> $MaxFaces
 * @property float $FaceMatchThreshold
 */
class SearchFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     FaceId: string,
     *     MaxFaces?: int<1, 4096>,
     *     FaceMatchThreshold?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
