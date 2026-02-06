<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AuthMaterial>|null $AuthMaterialsToAdd
 * @property list<AuthMaterial>|null $AuthMaterialsToUpdate
 */
class GeneralAuthorizationUpdate extends Shape
{
    /**
     * @param array{
     *     AuthMaterialsToAdd?: list<AuthMaterial>|null,
     *     AuthMaterialsToUpdate?: list<AuthMaterial>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
