<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyArn
 * @property list<string> $Roles
 * @property list<string> $Groups
 * @property list<string> $Users
 */
class IamActionDefinition extends Shape
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     Roles?: list<string>,
     *     Groups?: list<string>,
     *     Users?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
