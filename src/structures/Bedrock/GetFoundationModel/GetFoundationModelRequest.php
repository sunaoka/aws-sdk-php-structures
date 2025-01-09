<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetFoundationModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelIdentifier
 */
class GetFoundationModelRequest extends Request
{
    /**
     * @param array{modelIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
