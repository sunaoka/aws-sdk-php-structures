<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionName
 * @property ActionDefinition $ActionDefinition
 */
class CustomAction extends Shape
{
    /**
     * @param array{
     *     ActionName: string,
     *     ActionDefinition: ActionDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
