<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Recommendation|null $recommendation
 * @property list<SuggestedFix>|null $suggestedFixes
 */
class Remediation extends Shape
{
    /**
     * @param array{
     *     recommendation?: Recommendation|null,
     *     suggestedFixes?: list<SuggestedFix>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
