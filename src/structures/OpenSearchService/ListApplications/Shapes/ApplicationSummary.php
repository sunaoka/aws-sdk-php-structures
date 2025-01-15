<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $endpoint
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     endpoint?: string|null,
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
