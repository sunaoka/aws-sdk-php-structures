<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageAncestry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $ImageId
 * @property string|null $ImageOwnerAlias
 * @property string|null $SourceImageId
 * @property string|null $SourceImageRegion
 */
class ImageAncestryEntry extends Shape
{
    /**
     * @param array{
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     ImageId?: string|null,
     *     ImageOwnerAlias?: string|null,
     *     SourceImageId?: string|null,
     *     SourceImageRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
