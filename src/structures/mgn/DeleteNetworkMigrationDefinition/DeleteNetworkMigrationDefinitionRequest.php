<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteNetworkMigrationDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationDefinitionID
 */
class DeleteNetworkMigrationDefinitionRequest extends Request
{
    /**
     * @param array{networkMigrationDefinitionID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
