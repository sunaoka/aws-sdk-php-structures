<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelIdentifier
 */
class GetCustomModelRequest extends Request
{
    /**
     * @param array{modelIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
