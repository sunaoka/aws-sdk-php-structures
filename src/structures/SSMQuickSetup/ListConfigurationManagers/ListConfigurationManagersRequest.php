<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int<1, 100> $MaxItems
 * @property string $StartingToken
 */
class ListConfigurationManagersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     MaxItems?: int<1, 100>,
     *     StartingToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
