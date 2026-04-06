<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetAccountAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthMaterialName
 */
class GeneralAuthorizationName extends Shape
{
    /**
     * @param array{AuthMaterialName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
