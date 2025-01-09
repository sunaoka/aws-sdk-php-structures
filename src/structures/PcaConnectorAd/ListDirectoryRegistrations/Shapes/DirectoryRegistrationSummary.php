<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListDirectoryRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DirectoryId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_RESOURCE_NOT_FOUND'|'DIRECTORY_NOT_ACTIVE'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_TYPE_NOT_SUPPORTED'|'INTERNAL_FAILURE' $StatusReason
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class DirectoryRegistrationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DirectoryId?: string,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     StatusReason?: 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_RESOURCE_NOT_FOUND'|'DIRECTORY_NOT_ACTIVE'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_TYPE_NOT_SUPPORTED'|'INTERNAL_FAILURE',
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
