<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteStateMachineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineVersionArn
 */
class DeleteStateMachineVersionRequest extends Request
{
    /**
     * @param array{stateMachineVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
