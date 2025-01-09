<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property DataSourceConfigurationsResult $DataSources
 * @property list<MemberFeaturesConfigurationResult> $Features
 */
class MemberDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     DataSources?: DataSourceConfigurationsResult,
     *     Features?: list<MemberFeaturesConfigurationResult>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
