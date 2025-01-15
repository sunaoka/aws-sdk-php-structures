<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $FaceId
 * @property int<1, 4096>|null $MaxFaces
 * @property float|null $FaceMatchThreshold
 */
class SearchFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     FaceId: string,
     *     MaxFaces?: int<1, 4096>|null,
     *     FaceMatchThreshold?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
