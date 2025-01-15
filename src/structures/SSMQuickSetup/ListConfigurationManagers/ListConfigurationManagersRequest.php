<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxItems
 * @property string|null $StartingToken
 */
class ListConfigurationManagersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxItems?: int<1, 100>|null,
     *     StartingToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
