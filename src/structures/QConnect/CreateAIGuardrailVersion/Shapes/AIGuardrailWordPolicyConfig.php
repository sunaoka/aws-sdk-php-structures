<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailManagedWordsConfig>|null $managedWordListsConfig
 * @property list<GuardrailWordConfig>|null $wordsConfig
 */
class AIGuardrailWordPolicyConfig extends Shape
{
    /**
     * @param array{
     *     managedWordListsConfig?: list<GuardrailManagedWordsConfig>|null,
     *     wordsConfig?: list<GuardrailWordConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
