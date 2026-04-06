<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListCustomPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
