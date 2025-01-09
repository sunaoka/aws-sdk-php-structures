<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApplicationPolicies $ApplicationPolicies
 * @property KeyUsage $KeyUsage
 */
class ExtensionsV4 extends Shape
{
    /**
     * @param array{
     *     ApplicationPolicies?: ApplicationPolicies,
     *     KeyUsage: KeyUsage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
