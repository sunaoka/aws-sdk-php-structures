<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLakeFormationIdentityCenterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataLakePrincipalIdentifier
 */
class DataLakePrincipal extends Shape
{
    /**
     * @param array{DataLakePrincipalIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
