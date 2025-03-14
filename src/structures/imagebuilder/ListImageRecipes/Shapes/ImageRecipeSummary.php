<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property string|null $owner
 * @property string|null $parentImage
 * @property string|null $dateCreated
 * @property array<string, string>|null $tags
 */
class ImageRecipeSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     owner?: string|null,
     *     parentImage?: string|null,
     *     dateCreated?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
