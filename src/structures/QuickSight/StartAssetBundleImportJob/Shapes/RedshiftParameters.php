<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Host
 * @property int<0, 65535>|null $Port
 * @property string $Database
 * @property string|null $ClusterId
 * @property RedshiftIAMParameters|null $IAMParameters
 * @property IdentityCenterConfiguration|null $IdentityCenterConfiguration
 */
class RedshiftParameters extends Shape
{
    /**
     * @param array{
     *     Host?: string|null,
     *     Port?: int<0, 65535>|null,
     *     Database: string,
     *     ClusterId?: string|null,
     *     IAMParameters?: RedshiftIAMParameters|null,
     *     IdentityCenterConfiguration?: IdentityCenterConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
