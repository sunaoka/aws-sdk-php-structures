<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConfigurationDefinitionSummary>|null $ConfigurationDefinitionSummaries
 * @property string|null $Description
 * @property string $ManagerArn
 * @property string|null $Name
 * @property list<StatusSummary>|null $StatusSummaries
 */
class ConfigurationManagerSummary extends Shape
{
    /**
     * @param array{
     *     ConfigurationDefinitionSummaries?: list<ConfigurationDefinitionSummary>|null,
     *     Description?: string|null,
     *     ManagerArn: string,
     *     Name?: string|null,
     *     StatusSummaries?: list<StatusSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
