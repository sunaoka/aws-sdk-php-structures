<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveStringToEvaluate $Evaluate
 * @property 'CONTAINS' $Operator
 * @property list<string> $Values
 */
class ArchiveStringExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: ArchiveStringToEvaluate,
     *     Operator: 'CONTAINS',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
