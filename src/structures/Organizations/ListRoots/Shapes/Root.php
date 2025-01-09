<?php

namespace Sunaoka\Aws\Structures\Organizations\ListRoots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property list<PolicyTypeSummary> $PolicyTypes
 */
class Root extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     PolicyTypes?: list<PolicyTypeSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
