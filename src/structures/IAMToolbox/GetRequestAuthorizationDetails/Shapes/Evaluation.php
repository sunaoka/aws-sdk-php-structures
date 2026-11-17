<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property string $resource
 * @property array<string, Document>|null $context
 * @property 'ALLOW'|'EXPLICIT_DENY'|'IMPLICIT_DENY'|null $evaluatedEffect
 * @property list<MatchedPolicy>|null $matchedPolicies
 * @property list<Check>|null $checks
 */
class Evaluation extends Shape
{
    /**
     * @param array{
     *     action: string,
     *     resource: string,
     *     context?: array<string, Document>|null,
     *     evaluatedEffect?: 'ALLOW'|'EXPLICIT_DENY'|'IMPLICIT_DENY'|null,
     *     matchedPolicies?: list<MatchedPolicy>|null,
     *     checks?: list<Check>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
