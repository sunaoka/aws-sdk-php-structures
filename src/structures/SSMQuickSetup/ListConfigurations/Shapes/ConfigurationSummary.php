<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Account
 * @property string|null $ConfigurationDefinitionId
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property array<string, string>|null $FirstClassParameters
 * @property string|null $Id
 * @property string|null $ManagerArn
 * @property string|null $Region
 * @property list<StatusSummary>|null $StatusSummaries
 * @property string|null $Type
 * @property string|null $TypeVersion
 */
class ConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     Account?: string|null,
     *     ConfigurationDefinitionId?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     FirstClassParameters?: array<string, string>|null,
     *     Id?: string|null,
     *     ManagerArn?: string|null,
     *     Region?: string|null,
     *     StatusSummaries?: list<StatusSummary>|null,
     *     Type?: string|null,
     *     TypeVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
