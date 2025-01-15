<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property DataSourceConfigurationsResult|null $DataSources
 * @property list<MemberFeaturesConfigurationResult>|null $Features
 */
class MemberDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     DataSources?: DataSourceConfigurationsResult|null,
     *     Features?: list<MemberFeaturesConfigurationResult>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
