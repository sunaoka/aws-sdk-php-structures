<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $migrationId
 */
class GetMigrationRequest extends Request
{
    /**
     * @param array{migrationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
