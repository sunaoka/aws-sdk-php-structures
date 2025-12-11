<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeLakeFormationIdentityCenterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftConnect|null $RedshiftConnect
 */
class RedshiftScopeUnion extends Shape
{
    /**
     * @param array{RedshiftConnect?: RedshiftConnect|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
