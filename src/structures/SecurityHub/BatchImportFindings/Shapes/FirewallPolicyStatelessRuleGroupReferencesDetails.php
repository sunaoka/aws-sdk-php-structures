<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Priority
 * @property string $ResourceArn
 */
class FirewallPolicyStatelessRuleGroupReferencesDetails extends Shape
{
    /**
     * @param array{
     *     Priority?: int,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
