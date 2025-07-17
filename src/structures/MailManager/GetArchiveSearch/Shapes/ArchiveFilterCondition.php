<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveStringExpression|null $StringExpression
 * @property ArchiveBooleanExpression|null $BooleanExpression
 */
class ArchiveFilterCondition extends Shape
{
    /**
     * @param array{
     *     StringExpression?: ArchiveStringExpression|null,
     *     BooleanExpression?: ArchiveBooleanExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
