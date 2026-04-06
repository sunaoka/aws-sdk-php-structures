<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfileFlowModules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityProfileId
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListSecurityProfileFlowModulesRequest extends Request
{
    /**
     * @param array{
     *     SecurityProfileId: string,
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
