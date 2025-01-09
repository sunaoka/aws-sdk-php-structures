<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetNamespace\Shapes;

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
 * @property string $CreatorRequestId
 */
class NamespaceShape extends Shape
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
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     CreatorRequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
