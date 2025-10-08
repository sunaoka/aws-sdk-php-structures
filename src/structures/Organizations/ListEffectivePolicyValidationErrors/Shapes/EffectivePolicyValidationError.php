<?php

namespace Sunaoka\Aws\Structures\Organizations\ListEffectivePolicyValidationErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property string|null $PathToError
 * @property list<string>|null $ContributingPolicies
 */
class EffectivePolicyValidationError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null,
     *     PathToError?: string|null,
     *     ContributingPolicies?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
