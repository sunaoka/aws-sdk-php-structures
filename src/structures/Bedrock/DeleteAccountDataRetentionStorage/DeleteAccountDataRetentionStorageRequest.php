<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAccountDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'anthropic'|'openai' $modelProvider
 */
class DeleteAccountDataRetentionStorageRequest extends Request
{
    /**
     * @param array{modelProvider: 'anthropic'|'openai'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
