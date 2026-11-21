<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteProjectDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectIdentifier
 * @property 'anthropic'|'openai' $modelProvider
 */
class DeleteProjectDataRetentionStorageRequest extends Request
{
    /**
     * @param array{
     *     projectIdentifier: string,
     *     modelProvider: 'anthropic'|'openai'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
