<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManager $SecretsManager
 * @property string $AuthMaterialName
 */
class AuthMaterial extends Shape
{
    /**
     * @param array{
     *     SecretsManager: SecretsManager,
     *     AuthMaterialName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
