<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListRoleMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $Role
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class ListRoleMembershipsRequest extends Request
{
    /**
     * @param array{
     *     Role: 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
