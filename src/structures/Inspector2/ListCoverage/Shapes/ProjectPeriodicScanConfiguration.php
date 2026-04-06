<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $frequencyExpression
 * @property list<'SAST'|'IAC'|'SCA'>|null $ruleSetCategories
 */
class ProjectPeriodicScanConfiguration extends Shape
{
    /**
     * @param array{
     *     frequencyExpression?: string|null,
     *     ruleSetCategories?: list<'SAST'|'IAC'|'SCA'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
