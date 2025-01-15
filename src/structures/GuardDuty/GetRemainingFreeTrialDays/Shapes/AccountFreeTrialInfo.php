<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property DataSourcesFreeTrial|null $DataSources
 * @property list<FreeTrialFeatureConfigurationResult>|null $Features
 */
class AccountFreeTrialInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     DataSources?: DataSourcesFreeTrial|null,
     *     Features?: list<FreeTrialFeatureConfigurationResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
