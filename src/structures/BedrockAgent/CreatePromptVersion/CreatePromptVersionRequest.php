<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $promptIdentifier
 * @property string|null $description
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreatePromptVersionRequest extends Request
{
    /**
     * @param array{
     *     promptIdentifier: string,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
