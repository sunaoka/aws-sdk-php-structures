<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $arn
 * @property string $name
 * @property 'ACTIVE'|'DELETING'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     arn: string,
     *     name: string,
     *     status: 'ACTIVE'|'DELETING'|'DELETED',
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
