<?php

namespace Sunaoka\Aws\Structures\S3Tables\CompleteTableMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableARN
 */
class CompleteTableMigrationRequest extends Request
{
    /**
     * @param array{tableARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
