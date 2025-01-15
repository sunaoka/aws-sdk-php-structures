<?php

namespace Sunaoka\Aws\Structures\Route53Domains\TransferDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string>|null $GlueIps
 */
class Nameserver extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     GlueIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
