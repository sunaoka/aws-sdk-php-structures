<?php

namespace Sunaoka\Aws\Structures\Appstream\ListEntitledApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $EntitlementName
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class ListEntitledApplicationsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     EntitlementName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
