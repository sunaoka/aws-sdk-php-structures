<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $promptIdentifier
 * @property array<string, string> $tags
 */
class CreatePromptVersionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     promptIdentifier: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
