<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $defaultVariant
 * @property list<Shapes\PromptVariant>|null $variants
 * @property string $promptIdentifier
 */
class UpdatePromptRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     customerEncryptionKeyArn?: string|null,
     *     defaultVariant?: string|null,
     *     variants?: list<Shapes\PromptVariant>|null,
     *     promptIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
