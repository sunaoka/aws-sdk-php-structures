<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property string $guardrailVersion
 * @property 'INPUT'|'OUTPUT' $source
 * @property list<Shapes\GuardrailContentBlock> $content
 */
class ApplyGuardrailRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     guardrailVersion: string,
     *     source: 'INPUT'|'OUTPUT',
     *     content: list<Shapes\GuardrailContentBlock>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
