<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property 'AnyAllowed'|'NoneAllowed' $organizationRuleMode
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 */
class AccountInfo extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     status: 'Active'|'Inactive'|'Pending'|'Failed',
     *     organizationRuleMode: 'AnyAllowed'|'NoneAllowed',
     *     statusReason?: string|null,
     *     lastUpdatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
