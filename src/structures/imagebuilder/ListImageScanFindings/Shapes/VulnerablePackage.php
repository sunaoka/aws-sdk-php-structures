<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $version
 * @property string|null $sourceLayerHash
 * @property int|null $epoch
 * @property string|null $release
 * @property string|null $arch
 * @property string|null $packageManager
 * @property string|null $filePath
 * @property string|null $fixedInVersion
 * @property string|null $remediation
 */
class VulnerablePackage extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     version?: string|null,
     *     sourceLayerHash?: string|null,
     *     epoch?: int|null,
     *     release?: string|null,
     *     arch?: string|null,
     *     packageManager?: string|null,
     *     filePath?: string|null,
     *     fixedInVersion?: string|null,
     *     remediation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
