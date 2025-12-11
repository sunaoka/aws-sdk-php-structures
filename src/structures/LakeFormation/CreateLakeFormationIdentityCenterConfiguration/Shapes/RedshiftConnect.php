<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationIdentityCenterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Authorization
 */
class RedshiftConnect extends Shape
{
    /**
     * @param array{Authorization: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
