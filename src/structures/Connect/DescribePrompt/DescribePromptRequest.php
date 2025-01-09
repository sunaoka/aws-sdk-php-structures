<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $PromptId
 */
class DescribePromptRequest extends Request
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
