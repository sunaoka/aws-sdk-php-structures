<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListAccessTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dnsViewId
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string $globalResolverId
 * @property string|null $name
 * @property 'CREATING'|'OPERATIONAL'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AccessTokenItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     dnsViewId: string,
     *     expiresAt: \Aws\Api\DateTimeResult,
     *     globalResolverId: string,
     *     name?: string|null,
     *     status: 'CREATING'|'OPERATIONAL'|'DELETING',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
