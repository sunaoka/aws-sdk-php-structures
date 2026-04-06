<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopDataMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataMigrationIdentifier
 */
class StopDataMigrationRequest extends Request
{
    /**
     * @param array{DataMigrationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
