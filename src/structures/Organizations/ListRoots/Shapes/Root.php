<?php

namespace Sunaoka\Aws\Structures\Organizations\ListRoots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property list<PolicyTypeSummary>|null $PolicyTypes
 */
class Root extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     PolicyTypes?: list<PolicyTypeSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
