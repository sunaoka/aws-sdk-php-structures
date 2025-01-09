<?php

namespace Sunaoka\Aws\Structures\Connect\GetPromptFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $PromptId
 */
class GetPromptFileRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PromptId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
