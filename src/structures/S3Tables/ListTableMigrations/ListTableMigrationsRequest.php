<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableMigrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $tableBucketARN
 * @property string|null $namespace
 * @property string|null $name
 * @property string|null $tableARN
 * @property 'new'|'planning'|'pendingReview'|'queued'|'migrating'|'succeeded'|'failed'|'cancelling'|'cancelled'|null $state
 * @property bool|null $hasValidPlan
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListTableMigrationsRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN?: string|null,
     *     namespace?: string|null,
     *     name?: string|null,
     *     tableARN?: string|null,
     *     state?: 'new'|'planning'|'pendingReview'|'queued'|'migrating'|'succeeded'|'failed'|'cancelling'|'cancelled'|null,
     *     hasValidPlan?: bool|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
