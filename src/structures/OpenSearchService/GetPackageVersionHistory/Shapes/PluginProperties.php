<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetPackageVersionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Version
 * @property string|null $ClassName
 * @property int|null $UncompressedSizeInBytes
 */
class PluginProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Version?: string|null,
     *     ClassName?: string|null,
     *     UncompressedSizeInBytes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
