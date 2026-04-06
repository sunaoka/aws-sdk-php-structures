<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arch
 * @property int|null $epoch
 * @property string|null $filePath
 * @property string|null $name
 * @property string|null $packageManager
 * @property string|null $release
 * @property string|null $sourceLayerHash
 * @property string|null $version
 * @property string|null $fixedInVersion
 */
class VulnerablePackage extends Shape
{
    /**
     * @param array{
     *     arch?: string|null,
     *     epoch?: int|null,
     *     filePath?: string|null,
     *     name?: string|null,
     *     packageManager?: string|null,
     *     release?: string|null,
     *     sourceLayerHash?: string|null,
     *     version?: string|null,
     *     fixedInVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
