<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListDirectoryRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DirectoryId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_RESOURCE_NOT_FOUND'|'DIRECTORY_NOT_ACTIVE'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_TYPE_NOT_SUPPORTED'|'INTERNAL_FAILURE'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class DirectoryRegistrationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DirectoryId?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     StatusReason?: 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_RESOURCE_NOT_FOUND'|'DIRECTORY_NOT_ACTIVE'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_TYPE_NOT_SUPPORTED'|'INTERNAL_FAILURE'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
