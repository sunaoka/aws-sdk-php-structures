<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListMigrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $status
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListMigrationsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     status?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
