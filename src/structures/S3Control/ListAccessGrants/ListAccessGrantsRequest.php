<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 * @property 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM'|null $GranteeType
 * @property string|null $GranteeIdentifier
 * @property 'READ'|'WRITE'|'READWRITE'|null $Permission
 * @property string|null $GrantScope
 * @property string|null $ApplicationArn
 */
class ListAccessGrantsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null,
     *     GranteeType?: 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM'|null,
     *     GranteeIdentifier?: string|null,
     *     Permission?: 'READ'|'WRITE'|'READWRITE'|null,
     *     GrantScope?: string|null,
     *     ApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
