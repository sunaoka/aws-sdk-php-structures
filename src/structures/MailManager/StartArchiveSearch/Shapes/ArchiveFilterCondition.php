<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveBooleanExpression|null $BooleanExpression
 * @property ArchiveStringExpression|null $StringExpression
 */
class ArchiveFilterCondition extends Shape
{
    /**
     * @param array{
     *     BooleanExpression?: ArchiveBooleanExpression|null,
     *     StringExpression?: ArchiveStringExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
