<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'DNS_PUBLIC'|'DNS_PRIVATE'|'HTTP' $Type
 * @property string $Description
 * @property int $ServiceCount
 * @property NamespaceProperties $Properties
 * @property \Aws\Api\DateTimeResult $CreateDate
 */
class NamespaceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Type?: 'DNS_PUBLIC'|'DNS_PRIVATE'|'HTTP',
     *     Description?: string,
     *     ServiceCount?: int,
     *     Properties?: NamespaceProperties,
     *     CreateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
