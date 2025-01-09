<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customerEncryptionKeyArn
 * @property string $defaultVariant
 * @property string $description
 * @property string $name
 * @property string $promptIdentifier
 * @property list<Shapes\PromptVariant> $variants
 */
class UpdatePromptRequest extends Request
{
    /**
     * @param array{
     *     customerEncryptionKeyArn?: string,
     *     defaultVariant?: string,
     *     description?: string,
     *     name: string,
     *     promptIdentifier: string,
     *     variants?: list<Shapes\PromptVariant>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
