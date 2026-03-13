<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationDefinitionID
 */
class GetNetworkMigrationDefinitionRequest extends Request
{
    /**
     * @param array{networkMigrationDefinitionID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
