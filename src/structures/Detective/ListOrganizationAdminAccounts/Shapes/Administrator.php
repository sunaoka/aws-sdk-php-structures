<?php

namespace Sunaoka\Aws\Structures\Detective\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $GraphArn
 * @property \Aws\Api\DateTimeResult $DelegationTime
 */
class Administrator extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     GraphArn?: string,
     *     DelegationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
