<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Version
 * @property string $Epoch
 * @property string $Release
 * @property string $Architecture
 * @property string $PackageManager
 * @property string $FilePath
 * @property string $FixedInVersion
 * @property string $Remediation
 * @property string $SourceLayerHash
 * @property string $SourceLayerArn
 */
class SoftwarePackage extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Version?: string,
     *     Epoch?: string,
     *     Release?: string,
     *     Architecture?: string,
     *     PackageManager?: string,
     *     FilePath?: string,
     *     FixedInVersion?: string,
     *     Remediation?: string,
     *     SourceLayerHash?: string,
     *     SourceLayerArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
