<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataMigrationIdentifier
 */
class DeleteDataMigrationRequest extends Request
{
    /**
     * @param array{DataMigrationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
