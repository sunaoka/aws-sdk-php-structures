<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribePartners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $PartnerName
 * @property 'Active'|'Inactive'|'RuntimeFailure'|'ConnectionFailure' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class PartnerIntegrationInfo extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string,
     *     PartnerName?: string,
     *     Status?: 'Active'|'Inactive'|'RuntimeFailure'|'ConnectionFailure',
     *     StatusMessage?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
