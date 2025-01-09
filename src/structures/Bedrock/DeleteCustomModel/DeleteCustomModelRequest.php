<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteCustomModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelIdentifier
 */
class DeleteCustomModelRequest extends Request
{
    /**
     * @param array{modelIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
