<?php

namespace Sunaoka\Aws\Structures\Detective\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $GraphArn
 * @property \Aws\Api\DateTimeResult|null $DelegationTime
 */
class Administrator extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     GraphArn?: string|null,
     *     DelegationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
