<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Account
 * @property string $ConfigurationDefinitionId
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property array<string, string> $FirstClassParameters
 * @property string $Id
 * @property string $ManagerArn
 * @property string $Region
 * @property list<StatusSummary> $StatusSummaries
 * @property string $Type
 * @property string $TypeVersion
 */
class ConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     Account?: string,
     *     ConfigurationDefinitionId?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     FirstClassParameters?: array<string, string>,
     *     Id?: string,
     *     ManagerArn?: string,
     *     Region?: string,
     *     StatusSummaries?: list<StatusSummary>,
     *     Type?: string,
     *     TypeVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
