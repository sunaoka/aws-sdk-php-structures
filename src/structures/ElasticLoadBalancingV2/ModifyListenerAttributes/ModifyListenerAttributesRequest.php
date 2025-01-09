<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListenerAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<Shapes\ListenerAttribute> $Attributes
 */
class ModifyListenerAttributesRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Attributes: list<Shapes\ListenerAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
