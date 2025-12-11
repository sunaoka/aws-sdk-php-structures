<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutEnforcedGuardrailConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $guardrailIdentifier
 * @property string $guardrailVersion
 * @property 'HONOR'|'IGNORE' $inputTags
 */
class AccountEnforcedGuardrailInferenceInputConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     guardrailVersion: string,
     *     inputTags: 'HONOR'|'IGNORE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
