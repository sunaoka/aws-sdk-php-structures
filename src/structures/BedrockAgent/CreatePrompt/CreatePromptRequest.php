<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $defaultVariant
 * @property string|null $description
 * @property string $name
 * @property array<string, string>|null $tags
 * @property list<Shapes\PromptVariant>|null $variants
 */
class CreatePromptRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     customerEncryptionKeyArn?: string|null,
     *     defaultVariant?: string|null,
     *     description?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     variants?: list<Shapes\PromptVariant>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
