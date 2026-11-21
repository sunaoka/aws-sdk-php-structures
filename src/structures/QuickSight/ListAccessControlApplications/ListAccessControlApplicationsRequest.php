<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAccessControlApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $Namespace
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAccessControlApplicationsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
