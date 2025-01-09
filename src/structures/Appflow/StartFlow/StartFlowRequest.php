<?php

namespace Sunaoka\Aws\Structures\Appflow\StartFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property string $clientToken
 */
class StartFlowRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
