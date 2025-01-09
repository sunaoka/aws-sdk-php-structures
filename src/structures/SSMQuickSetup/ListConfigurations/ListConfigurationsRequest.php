<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationDefinitionId
 * @property list<Shapes\Filter> $Filters
 * @property string $ManagerArn
 * @property int $MaxItems
 * @property string $StartingToken
 */
class ListConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationDefinitionId?: string,
     *     Filters?: list<Shapes\Filter>,
     *     ManagerArn?: string,
     *     MaxItems?: int,
     *     StartingToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
