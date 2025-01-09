<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListContainerRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'DOCKER' $containerType
 * @property string $name
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string $owner
 * @property string $parentImage
 * @property string $dateCreated
 * @property array<string, string> $tags
 */
class ContainerRecipeSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     containerType?: 'DOCKER',
     *     name?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     owner?: string,
     *     parentImage?: string,
     *     dateCreated?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
