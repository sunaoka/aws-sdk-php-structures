<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $ResourceOwner
 * @property string|null $Name
 * @property 'DNS_PUBLIC'|'DNS_PRIVATE'|'HTTP'|null $Type
 * @property string|null $Description
 * @property int|null $ServiceCount
 * @property NamespaceProperties|null $Properties
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $CreatorRequestId
 */
class NamespaceShape extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     ResourceOwner?: string|null,
     *     Name?: string|null,
     *     Type?: 'DNS_PUBLIC'|'DNS_PRIVATE'|'HTTP'|null,
     *     Description?: string|null,
     *     ServiceCount?: int|null,
     *     Properties?: NamespaceProperties|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     CreatorRequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
