<?php

namespace Sunaoka\Aws\Structures\Appflow\CancelFlowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property list<string> $executionIds
 */
class CancelFlowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     executionIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
