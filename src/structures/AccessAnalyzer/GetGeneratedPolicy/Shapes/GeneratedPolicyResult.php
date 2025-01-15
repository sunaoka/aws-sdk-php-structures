<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeneratedPolicyProperties $properties
 * @property list<GeneratedPolicy>|null $generatedPolicies
 */
class GeneratedPolicyResult extends Shape
{
    /**
     * @param array{
     *     properties: GeneratedPolicyProperties,
     *     generatedPolicies?: list<GeneratedPolicy>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
