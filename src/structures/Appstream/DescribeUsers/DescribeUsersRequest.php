<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD',
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
