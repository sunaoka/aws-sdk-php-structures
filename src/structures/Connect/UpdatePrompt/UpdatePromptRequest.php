<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $PromptId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $S3Uri
 */
class UpdatePromptRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PromptId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     S3Uri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
