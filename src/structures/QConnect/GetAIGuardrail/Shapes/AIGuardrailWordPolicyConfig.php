<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailManagedWordsConfig> $managedWordListsConfig
 * @property list<GuardrailWordConfig> $wordsConfig
 */
class AIGuardrailWordPolicyConfig extends Shape
{
    /**
     * @param array{
     *     managedWordListsConfig?: list<GuardrailManagedWordsConfig>,
     *     wordsConfig?: list<GuardrailWordConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
