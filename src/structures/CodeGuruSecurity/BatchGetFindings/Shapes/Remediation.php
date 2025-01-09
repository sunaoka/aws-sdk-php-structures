<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Recommendation $recommendation
 * @property list<SuggestedFix> $suggestedFixes
 */
class Remediation extends Shape
{
    /**
     * @param array{
     *     recommendation?: Recommendation,
     *     suggestedFixes?: list<SuggestedFix>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
