<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringFilter|null $name
 * @property StringFilter|null $version
 * @property NumberFilter|null $epoch
 * @property StringFilter|null $release
 * @property StringFilter|null $architecture
 * @property StringFilter|null $sourceLayerHash
 * @property StringFilter|null $sourceLambdaLayerArn
 * @property StringFilter|null $filePath
 */
class PackageFilter extends Shape
{
    /**
     * @param array{
     *     name?: StringFilter|null,
     *     version?: StringFilter|null,
     *     epoch?: NumberFilter|null,
     *     release?: StringFilter|null,
     *     architecture?: StringFilter|null,
     *     sourceLayerHash?: StringFilter|null,
     *     sourceLambdaLayerArn?: StringFilter|null,
     *     filePath?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
