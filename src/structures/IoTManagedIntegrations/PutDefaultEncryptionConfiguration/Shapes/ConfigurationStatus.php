<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutDefaultEncryptionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationError|null $error
 * @property 'ENABLED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $state
 */
class ConfigurationStatus extends Shape
{
    /**
     * @param array{
     *     error?: ConfigurationError|null,
     *     state: 'ENABLED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
