<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 600>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\InstanceConfigurationFilter|null $InstanceConfigurationFilter
 */
class ListInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 600>|null,
     *     NextToken?: string|null,
     *     InstanceConfigurationFilter?: Shapes\InstanceConfigurationFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
