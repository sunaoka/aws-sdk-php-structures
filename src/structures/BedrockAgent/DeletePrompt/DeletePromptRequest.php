<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeletePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $promptIdentifier
 * @property string|null $promptVersion
 */
class DeletePromptRequest extends Request
{
    /**
     * @param array{
     *     promptIdentifier: string,
     *     promptVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
