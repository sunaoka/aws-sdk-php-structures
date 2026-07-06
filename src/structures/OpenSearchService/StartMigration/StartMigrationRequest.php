<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property Shapes\MigrationOptions $migrationOptions
 * @property string|null $clientToken
 */
class StartMigrationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     migrationOptions: Shapes\MigrationOptions,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
