<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribePartners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseName
 * @property string|null $PartnerName
 * @property 'Active'|'Inactive'|'RuntimeFailure'|'ConnectionFailure'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class PartnerIntegrationInfo extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     PartnerName?: string|null,
     *     Status?: 'Active'|'Inactive'|'RuntimeFailure'|'ConnectionFailure'|null,
     *     StatusMessage?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
