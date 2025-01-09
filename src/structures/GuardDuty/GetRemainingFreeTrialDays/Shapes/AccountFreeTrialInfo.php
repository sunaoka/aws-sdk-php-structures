<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property DataSourcesFreeTrial $DataSources
 * @property list<FreeTrialFeatureConfigurationResult> $Features
 */
class AccountFreeTrialInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     DataSources?: DataSourcesFreeTrial,
     *     Features?: list<FreeTrialFeatureConfigurationResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
