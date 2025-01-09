<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property Shapes\Image $Image
 * @property float $UserMatchThreshold
 * @property int $MaxUsers
 * @property 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH' $QualityFilter
 */
class SearchUsersByImageRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Image: Shapes\Image,
     *     UserMatchThreshold?: float,
     *     MaxUsers?: int,
     *     QualityFilter?: 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
