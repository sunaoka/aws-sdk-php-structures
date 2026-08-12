<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListApprovalPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROUP' $Type
 * @property list<string>|null $GroupArns
 */
class ApplicableTo extends Shape
{
    /**
     * @param array{
     *     Type: 'GROUP',
     *     GroupArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
