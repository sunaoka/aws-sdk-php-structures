<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAccountDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'anthropic'|'openai' $modelProvider
 */
class GetAccountDataRetentionStorageRequest extends Request
{
    /**
     * @param array{modelProvider: 'anthropic'|'openai'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
