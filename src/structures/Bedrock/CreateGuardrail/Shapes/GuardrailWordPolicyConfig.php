<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailWordConfig> $wordsConfig
 * @property list<GuardrailManagedWordsConfig> $managedWordListsConfig
 */
class GuardrailWordPolicyConfig extends Shape
{
    /**
     * @param array{
     *     wordsConfig?: list<GuardrailWordConfig>,
     *     managedWordListsConfig?: list<GuardrailManagedWordsConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
