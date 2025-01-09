<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeletePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $promptIdentifier
 * @property string $promptVersion
 */
class DeletePromptRequest extends Request
{
    /**
     * @param array{
     *     promptIdentifier: string,
     *     promptVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
