<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetProjectDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectIdentifier
 * @property 'anthropic'|'openai' $modelProvider
 */
class GetProjectDataRetentionStorageRequest extends Request
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
