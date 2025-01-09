<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainDetail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $GlueIps
 */
class Nameserver extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     GlueIps?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
