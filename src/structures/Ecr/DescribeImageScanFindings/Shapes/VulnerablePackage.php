<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arch
 * @property int $epoch
 * @property string $filePath
 * @property string $name
 * @property string $packageManager
 * @property string $release
 * @property string $sourceLayerHash
 * @property string $version
 * @property string $fixedInVersion
 */
class VulnerablePackage extends Shape
{
    /**
     * @param array{
     *     arch?: string,
     *     epoch?: int,
     *     filePath?: string,
     *     name?: string,
     *     packageManager?: string,
     *     release?: string,
     *     sourceLayerHash?: string,
     *     version?: string,
     *     fixedInVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
