<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property Shapes\Image $Image
 * @property float|null $UserMatchThreshold
 * @property int<1, 500>|null $MaxUsers
 * @property 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|null $QualityFilter
 */
class SearchUsersByImageRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Image: Shapes\Image,
     *     UserMatchThreshold?: float|null,
     *     MaxUsers?: int<1, 500>|null,
     *     QualityFilter?: 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
