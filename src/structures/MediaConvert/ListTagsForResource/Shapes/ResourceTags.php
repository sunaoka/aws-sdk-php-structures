<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListTagsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property array<string, string> $Tags
 */
class ResourceTags extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
