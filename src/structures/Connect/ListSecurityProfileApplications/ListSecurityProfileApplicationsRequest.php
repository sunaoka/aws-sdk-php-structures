<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfileApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityProfileId
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListSecurityProfileApplicationsRequest extends Request
{
    /**
     * @param array{
     *     SecurityProfileId: string,
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
