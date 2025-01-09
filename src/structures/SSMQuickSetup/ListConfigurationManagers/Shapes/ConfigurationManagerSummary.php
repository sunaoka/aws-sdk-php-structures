<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConfigurationDefinitionSummary> $ConfigurationDefinitionSummaries
 * @property string $Description
 * @property string $ManagerArn
 * @property string $Name
 * @property list<StatusSummary> $StatusSummaries
 */
class ConfigurationManagerSummary extends Shape
{
    /**
     * @param array{
     *     ConfigurationDefinitionSummaries?: list<ConfigurationDefinitionSummary>,
     *     Description?: string,
     *     ManagerArn: string,
     *     Name?: string,
     *     StatusSummaries?: list<StatusSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
