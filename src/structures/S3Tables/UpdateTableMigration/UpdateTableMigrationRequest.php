<?php

namespace Sunaoka\Aws\Structures\S3Tables\UpdateTableMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $tableARN
 * @property string|null $migrationId
 * @property 'queued'|'cancelled' $requestedState
 * @property string|null $updateDescription
 */
class UpdateTableMigrationRequest extends Request
{
    /**
     * @param array{
     *     tableARN?: string|null,
     *     migrationId?: string|null,
     *     requestedState: 'queued'|'cancelled',
     *     updateDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
