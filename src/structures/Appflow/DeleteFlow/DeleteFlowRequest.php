<?php

namespace Sunaoka\Aws\Structures\Appflow\DeleteFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property bool $forceDelete
 */
class DeleteFlowRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     forceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
