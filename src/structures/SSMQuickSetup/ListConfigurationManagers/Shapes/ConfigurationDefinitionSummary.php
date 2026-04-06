<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $FirstClassParameters
 * @property string|null $Id
 * @property string|null $Type
 * @property string|null $TypeVersion
 */
class ConfigurationDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     FirstClassParameters?: array<string, string>|null,
     *     Id?: string|null,
     *     Type?: string|null,
     *     TypeVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
