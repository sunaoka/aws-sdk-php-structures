<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property IPSetForwardedIPConfig $IPSetForwardedIPConfig
 */
class IPSetReferenceStatement extends Shape
{
    /**
     * @param array{
     *     ARN: string,
     *     IPSetForwardedIPConfig?: IPSetForwardedIPConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
