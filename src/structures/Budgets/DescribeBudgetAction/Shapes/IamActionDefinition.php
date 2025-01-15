<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyArn
 * @property list<string>|null $Roles
 * @property list<string>|null $Groups
 * @property list<string>|null $Users
 */
class IamActionDefinition extends Shape
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     Roles?: list<string>|null,
     *     Groups?: list<string>|null,
     *     Users?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
