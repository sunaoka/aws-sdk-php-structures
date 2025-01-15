<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $CallerReference
 * @property list<string> $NameServers
 */
class DelegationSet extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     CallerReference?: string|null,
     *     NameServers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
