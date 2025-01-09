<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Version
 * @property string $ClassName
 * @property int $UncompressedSizeInBytes
 */
class PluginProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Version?: string,
     *     ClassName?: string,
     *     UncompressedSizeInBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
