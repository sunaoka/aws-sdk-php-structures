<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $guardrailId
 * @property string|null $guardrailVersion
 * @property string|null $guardrailArn
 * @property list<'REQUEST'|'ACCOUNT_ENFORCED'|'ORGANIZATION_ENFORCED'>|null $guardrailOrigin
 * @property 'SELF'|'CROSS_ACCOUNT'|null $guardrailOwnership
 */
class AppliedGuardrailDetails extends Shape
{
    /**
     * @param array{
     *     guardrailId?: string|null,
     *     guardrailVersion?: string|null,
     *     guardrailArn?: string|null,
     *     guardrailOrigin?: list<'REQUEST'|'ACCOUNT_ENFORCED'|'ORGANIZATION_ENFORCED'>|null,
     *     guardrailOwnership?: 'SELF'|'CROSS_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
