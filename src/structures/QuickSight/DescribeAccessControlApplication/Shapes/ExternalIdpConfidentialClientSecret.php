<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientSecretId
 * @property array<string, string>|null $RegionalSecretManagerArns
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Description
 */
class ExternalIdpConfidentialClientSecret extends Shape
{
    /**
     * @param array{
     *     ClientSecretId: string,
     *     RegionalSecretManagerArns?: array<string, string>|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
