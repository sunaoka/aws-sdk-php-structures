<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $FirstClassParameters
 * @property string $Id
 * @property string $Type
 * @property string $TypeVersion
 */
class ConfigurationDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     FirstClassParameters?: array<string, string>,
     *     Id?: string,
     *     Type?: string,
     *     TypeVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
