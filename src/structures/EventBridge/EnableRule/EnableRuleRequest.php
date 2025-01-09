<?php

namespace Sunaoka\Aws\Structures\EventBridge\EnableRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $EventBusName
 */
class EnableRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventBusName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
