<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateVpcIngressConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcIngressConnectionArn
 * @property string $VpcIngressConnectionName
 * @property string $ServiceArn
 * @property 'AVAILABLE'|'PENDING_CREATION'|'PENDING_UPDATE'|'PENDING_DELETION'|'FAILED_CREATION'|'FAILED_UPDATE'|'FAILED_DELETION'|'DELETED' $Status
 * @property string $AccountId
 * @property string $DomainName
 * @property IngressVpcConfiguration $IngressVpcConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $DeletedAt
 */
class VpcIngressConnection extends Shape
{
    /**
     * @param array{
     *     VpcIngressConnectionArn?: string,
     *     VpcIngressConnectionName?: string,
     *     ServiceArn?: string,
     *     Status?: 'AVAILABLE'|'PENDING_CREATION'|'PENDING_UPDATE'|'PENDING_DELETION'|'FAILED_CREATION'|'FAILED_UPDATE'|'FAILED_DELETION'|'DELETED',
     *     AccountId?: string,
     *     DomainName?: string,
     *     IngressVpcConfiguration?: IngressVpcConfiguration,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DeletedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
