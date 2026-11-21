<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetOrganizationDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'anthropic'|'openai' $modelProvider
 */
class GetOrganizationDataRetentionStorageRequest extends Request
{
    /**
     * @param array{modelProvider: 'anthropic'|'openai'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
