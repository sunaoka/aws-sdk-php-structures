<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $EventBusName
 * @property bool $Force
 */
class DeleteRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventBusName?: string,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
