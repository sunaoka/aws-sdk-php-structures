<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $migrationId
 * @property string|null $tableARN
 */
class GetTableMigrationRequest extends Request
{
    /**
     * @param array{
     *     migrationId?: string|null,
     *     tableARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
