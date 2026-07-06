<?php

namespace Sunaoka\Aws\Structures\Billing\GetCredits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $creditId
 * @property string $accountId
 * @property string $creditType
 * @property Amount $initialAmount
 * @property Amount $remainingAmount
 * @property Amount|null $estimatedAmount
 * @property list<string>|null $applicableProductNames
 * @property string $description
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property \Aws\Api\DateTimeResult|null $exhaustDate
 * @property 'BEFORE_CROSS_SERVICE_DISCOUNTS'|'AFTER_DISCOUNTS'|null $applicationType
 * @property list<string>|null $shareableAccounts
 * @property bool|null $accountHasCreditSharingEnabled
 * @property string|null $creditConsoleVisibility
 * @property 'DEFAULT'|'DISABLED'|'CUSTOM'|'COST_CATEGORY_RULE'|null $creditSharingType
 * @property string|null $costCategoryArn
 * @property string|null $ruleName
 * @property 'ENABLED'|'DISABLED'|null $creditStatus
 * @property list<string>|null $purchaseTypeApplications
 */
class CreditData extends Shape
{
    /**
     * @param array{
     *     creditId: string,
     *     accountId: string,
     *     creditType: string,
     *     initialAmount: Amount,
     *     remainingAmount: Amount,
     *     estimatedAmount?: Amount|null,
     *     applicableProductNames?: list<string>|null,
     *     description: string,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     exhaustDate?: \Aws\Api\DateTimeResult|null,
     *     applicationType?: 'BEFORE_CROSS_SERVICE_DISCOUNTS'|'AFTER_DISCOUNTS'|null,
     *     shareableAccounts?: list<string>|null,
     *     accountHasCreditSharingEnabled?: bool|null,
     *     creditConsoleVisibility?: string|null,
     *     creditSharingType?: 'DEFAULT'|'DISABLED'|'CUSTOM'|'COST_CATEGORY_RULE'|null,
     *     costCategoryArn?: string|null,
     *     ruleName?: string|null,
     *     creditStatus?: 'ENABLED'|'DISABLED'|null,
     *     purchaseTypeApplications?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
