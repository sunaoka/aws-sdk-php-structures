<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteImportedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelIdentifier
 */
class DeleteImportedModelRequest extends Request
{
    /**
     * @param array{modelIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
