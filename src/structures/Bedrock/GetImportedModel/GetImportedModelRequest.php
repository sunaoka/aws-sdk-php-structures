<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetImportedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelIdentifier
 */
class GetImportedModelRequest extends Request
{
    /**
     * @param array{modelIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
