<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxItems
 * @property string $StartingToken
 */
class ListConfigurationManagersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     MaxItems?: int,
     *     StartingToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
