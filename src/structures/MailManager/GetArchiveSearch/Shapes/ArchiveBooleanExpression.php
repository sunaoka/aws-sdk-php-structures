<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveBooleanToEvaluate $Evaluate
 * @property 'IS_TRUE'|'IS_FALSE' $Operator
 */
class ArchiveBooleanExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: ArchiveBooleanToEvaluate,
     *     Operator: 'IS_TRUE'|'IS_FALSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
