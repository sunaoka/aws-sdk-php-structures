<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Priority
 * @property string|null $ResourceArn
 */
class FirewallPolicyStatelessRuleGroupReferencesDetails extends Shape
{
    /**
     * @param array{
     *     Priority?: int|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
