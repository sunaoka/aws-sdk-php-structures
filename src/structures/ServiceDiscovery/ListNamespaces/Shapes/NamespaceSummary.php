<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'DNS_PUBLIC'|'DNS_PRIVATE'|'HTTP'|null $Type
 * @property string|null $Description
 * @property int|null $ServiceCount
 * @property NamespaceProperties|null $Properties
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 */
class NamespaceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: 'DNS_PUBLIC'|'DNS_PRIVATE'|'HTTP'|null,
     *     Description?: string|null,
     *     ServiceCount?: int|null,
     *     Properties?: NamespaceProperties|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
