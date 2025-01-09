<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteFleetAdvisorDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DatabaseIds
 */
class DeleteFleetAdvisorDatabasesRequest extends Request
{
    /**
     * @param array{DatabaseIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
