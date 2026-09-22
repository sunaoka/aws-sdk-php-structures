<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string|null $domainArn
 * @property string|null $name
 * @property string|null $identityCenterInstanceArn
 * @property string|null $region
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE' $status
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     domainArn?: string|null,
     *     name?: string|null,
     *     identityCenterInstanceArn?: string|null,
     *     region?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
