<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartExtensionPackAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 */
class StartExtensionPackAssociationRequest extends Request
{
    /**
     * @param array{MigrationProjectIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
