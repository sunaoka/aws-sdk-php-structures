<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListTagsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property array<string, string>|null $Tags
 */
class ResourceTags extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
