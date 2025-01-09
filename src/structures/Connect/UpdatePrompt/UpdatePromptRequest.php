<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $PromptId
 * @property string $Name
 * @property string $Description
 * @property string $S3Uri
 */
class UpdatePromptRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PromptId: string,
     *     Name?: string,
     *     Description?: string,
     *     S3Uri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
