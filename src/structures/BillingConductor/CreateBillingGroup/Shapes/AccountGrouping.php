<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $LinkedAccountIds
 * @property bool|null $AutoAssociate
 * @property string|null $ResponsibilityTransferArn
 */
class AccountGrouping extends Shape
{
    /**
     * @param array{
     *     LinkedAccountIds?: list<string>|null,
     *     AutoAssociate?: bool|null,
     *     ResponsibilityTransferArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
