<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $version
 * @property string $sourceLayerHash
 * @property int $epoch
 * @property string $release
 * @property string $arch
 * @property string $packageManager
 * @property string $filePath
 * @property string $fixedInVersion
 * @property string $remediation
 */
class VulnerablePackage extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     version?: string,
     *     sourceLayerHash?: string,
     *     epoch?: int,
     *     release?: string,
     *     arch?: string,
     *     packageManager?: string,
     *     filePath?: string,
     *     fixedInVersion?: string,
     *     remediation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
