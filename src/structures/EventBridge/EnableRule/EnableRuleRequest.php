<?php

namespace Sunaoka\Aws\Structures\EventBridge\EnableRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $EventBusName
 */
class EnableRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventBusName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
