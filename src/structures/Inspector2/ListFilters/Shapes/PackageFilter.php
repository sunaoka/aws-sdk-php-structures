<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringFilter|null $architecture
 * @property NumberFilter|null $epoch
 * @property StringFilter|null $filePath
 * @property StringFilter|null $name
 * @property StringFilter|null $release
 * @property StringFilter|null $sourceLambdaLayerArn
 * @property StringFilter|null $sourceLayerHash
 * @property StringFilter|null $version
 */
class PackageFilter extends Shape
{
    /**
     * @param array{
     *     architecture?: StringFilter|null,
     *     epoch?: NumberFilter|null,
     *     filePath?: StringFilter|null,
     *     name?: StringFilter|null,
     *     release?: StringFilter|null,
     *     sourceLambdaLayerArn?: StringFilter|null,
     *     sourceLayerHash?: StringFilter|null,
     *     version?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
