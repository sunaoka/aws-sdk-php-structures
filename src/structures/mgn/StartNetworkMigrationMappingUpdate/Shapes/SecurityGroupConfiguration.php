<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecurityGroupAssociations|null $associations
 */
class SecurityGroupConfiguration extends Shape
{
    /**
     * @param array{associations?: SecurityGroupAssociations|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
