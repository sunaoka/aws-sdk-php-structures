<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Version
 * @property string|null $Epoch
 * @property string|null $Release
 * @property string|null $Architecture
 * @property string|null $PackageManager
 * @property string|null $FilePath
 * @property string|null $FixedInVersion
 * @property string|null $Remediation
 * @property string|null $SourceLayerHash
 * @property string|null $SourceLayerArn
 */
class SoftwarePackage extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Version?: string|null,
     *     Epoch?: string|null,
     *     Release?: string|null,
     *     Architecture?: string|null,
     *     PackageManager?: string|null,
     *     FilePath?: string|null,
     *     FixedInVersion?: string|null,
     *     Remediation?: string|null,
     *     SourceLayerHash?: string|null,
     *     SourceLayerArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
