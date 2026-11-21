<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteOrganizationDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'anthropic'|'openai' $modelProvider
 */
class DeleteOrganizationDataRetentionStorageRequest extends Request
{
    /**
     * @param array{modelProvider: 'anthropic'|'openai'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
