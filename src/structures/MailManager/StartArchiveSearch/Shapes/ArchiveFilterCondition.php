<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveBooleanExpression $BooleanExpression
 * @property ArchiveStringExpression $StringExpression
 */
class ArchiveFilterCondition extends Shape
{
    /**
     * @param array{
     *     BooleanExpression?: ArchiveBooleanExpression,
     *     StringExpression?: ArchiveStringExpression
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
