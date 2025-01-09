<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<0, 65535> $Port
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
     *     Port?: int<0, 65535>,
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
