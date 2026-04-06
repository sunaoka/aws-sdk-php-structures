<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConfigurationDefinitionId
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $ManagerArn
 * @property int<1, 100>|null $MaxItems
 * @property string|null $StartingToken
 */
class ListConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationDefinitionId?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     ManagerArn?: string|null,
     *     MaxItems?: int<1, 100>|null,
     *     StartingToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
