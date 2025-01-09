<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class ListDomainItem extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
