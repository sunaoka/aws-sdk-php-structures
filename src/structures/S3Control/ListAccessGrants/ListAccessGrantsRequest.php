<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 * @property int<0, 1000> $MaxResults
 * @property 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM' $GranteeType
 * @property string $GranteeIdentifier
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property string $GrantScope
 * @property string $ApplicationArn
 */
class ListAccessGrantsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 1000>,
     *     GranteeType?: 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM',
     *     GranteeIdentifier?: string,
     *     Permission?: 'READ'|'WRITE'|'READWRITE',
     *     GrantScope?: string,
     *     ApplicationArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
