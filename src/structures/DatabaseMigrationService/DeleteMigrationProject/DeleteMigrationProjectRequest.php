<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteMigrationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 */
class DeleteMigrationProjectRequest extends Request
{
    /**
     * @param array{MigrationProjectIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
