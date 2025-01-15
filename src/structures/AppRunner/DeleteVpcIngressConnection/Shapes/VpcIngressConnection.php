<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteVpcIngressConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcIngressConnectionArn
 * @property string|null $VpcIngressConnectionName
 * @property string|null $ServiceArn
 * @property 'AVAILABLE'|'PENDING_CREATION'|'PENDING_UPDATE'|'PENDING_DELETION'|'FAILED_CREATION'|'FAILED_UPDATE'|'FAILED_DELETION'|'DELETED'|null $Status
 * @property string|null $AccountId
 * @property string|null $DomainName
 * @property IngressVpcConfiguration|null $IngressVpcConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $DeletedAt
 */
class VpcIngressConnection extends Shape
{
    /**
     * @param array{
     *     VpcIngressConnectionArn?: string|null,
     *     VpcIngressConnectionName?: string|null,
     *     ServiceArn?: string|null,
     *     Status?: 'AVAILABLE'|'PENDING_CREATION'|'PENDING_UPDATE'|'PENDING_DELETION'|'FAILED_CREATION'|'FAILED_UPDATE'|'FAILED_DELETION'|'DELETED'|null,
     *     AccountId?: string|null,
     *     DomainName?: string|null,
     *     IngressVpcConfiguration?: IngressVpcConfiguration|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DeletedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
