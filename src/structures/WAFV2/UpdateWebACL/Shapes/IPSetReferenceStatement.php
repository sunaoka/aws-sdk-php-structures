<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property IPSetForwardedIPConfig|null $IPSetForwardedIPConfig
 */
class IPSetReferenceStatement extends Shape
{
    /**
     * @param array{
     *     ARN: string,
     *     IPSetForwardedIPConfig?: IPSetForwardedIPConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
