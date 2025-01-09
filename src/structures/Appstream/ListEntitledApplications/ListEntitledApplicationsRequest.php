<?php

namespace Sunaoka\Aws\Structures\Appstream\ListEntitledApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $EntitlementName
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListEntitledApplicationsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     EntitlementName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
