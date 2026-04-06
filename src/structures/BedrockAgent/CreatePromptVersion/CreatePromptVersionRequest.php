<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $promptIdentifier
 * @property array<string, string>|null $tags
 */
class CreatePromptVersionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     promptIdentifier: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
