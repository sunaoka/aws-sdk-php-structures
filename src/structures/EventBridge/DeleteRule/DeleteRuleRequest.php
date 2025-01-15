<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $EventBusName
 * @property bool|null $Force
 */
class DeleteRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventBusName?: string|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
