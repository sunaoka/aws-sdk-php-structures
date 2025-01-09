<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLakeFormationIdentityCenterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataLakePrincipalIdentifier
 */
class DataLakePrincipal extends Shape
{
    /**
     * @param array{DataLakePrincipalIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
