<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CallerReference
 * @property list<string> $NameServers
 */
class DelegationSet extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     CallerReference?: string,
     *     NameServers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
