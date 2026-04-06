<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $defaultVariant
 * @property string|null $description
 * @property string $name
 * @property string $promptIdentifier
 * @property list<Shapes\PromptVariant>|null $variants
 */
class UpdatePromptRequest extends Request
{
    /**
     * @param array{
     *     customerEncryptionKeyArn?: string|null,
     *     defaultVariant?: string|null,
     *     description?: string|null,
     *     name: string,
     *     promptIdentifier: string,
     *     variants?: list<Shapes\PromptVariant>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
