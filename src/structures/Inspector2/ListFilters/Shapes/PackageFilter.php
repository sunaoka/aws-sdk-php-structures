<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringFilter $architecture
 * @property NumberFilter $epoch
 * @property StringFilter $filePath
 * @property StringFilter $name
 * @property StringFilter $release
 * @property StringFilter $sourceLambdaLayerArn
 * @property StringFilter $sourceLayerHash
 * @property StringFilter $version
 */
class PackageFilter extends Shape
{
    /**
     * @param array{
     *     architecture?: StringFilter,
     *     epoch?: NumberFilter,
     *     filePath?: StringFilter,
     *     name?: StringFilter,
     *     release?: StringFilter,
     *     sourceLambdaLayerArn?: StringFilter,
     *     sourceLayerHash?: StringFilter,
     *     version?: StringFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
