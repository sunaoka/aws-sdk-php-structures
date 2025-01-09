<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $customerEncryptionKeyArn
 * @property string $defaultVariant
 * @property string $description
 * @property string $name
 * @property array<string, string> $tags
 * @property list<Shapes\PromptVariant> $variants
 */
class CreatePromptRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     customerEncryptionKeyArn?: string,
     *     defaultVariant?: string,
     *     description?: string,
     *     name: string,
     *     tags?: array<string, string>,
     *     variants?: list<Shapes\PromptVariant>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
