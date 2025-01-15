<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $LinkedAccountIds
 * @property bool|null $AutoAssociate
 */
class AccountGrouping extends Shape
{
    /**
     * @param array{
     *     LinkedAccountIds: list<string>,
     *     AutoAssociate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
