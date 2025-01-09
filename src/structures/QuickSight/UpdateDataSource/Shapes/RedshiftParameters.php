<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int $Port
 * @property string $Database
 * @property string $ClusterId
 * @property RedshiftIAMParameters $IAMParameters
 * @property IdentityCenterConfiguration $IdentityCenterConfiguration
 */
class RedshiftParameters extends Shape
{
    /**
     * @param array{
     *     Host?: string,
     *     Port?: int,
     *     Database: string,
     *     ClusterId?: string,
     *     IAMParameters?: RedshiftIAMParameters,
     *     IdentityCenterConfiguration?: IdentityCenterConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
