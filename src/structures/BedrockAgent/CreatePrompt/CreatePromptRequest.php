<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $defaultVariant
 * @property list<Shapes\PromptVariant>|null $variants
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreatePromptRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     customerEncryptionKeyArn?: string|null,
     *     defaultVariant?: string|null,
     *     variants?: list<Shapes\PromptVariant>|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
