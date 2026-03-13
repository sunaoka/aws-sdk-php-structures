<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $networkMigrationDefinitionIDs
 */
class ListNetworkMigrationDefinitionsRequestFilters extends Shape
{
    /**
     * @param array{networkMigrationDefinitionIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
