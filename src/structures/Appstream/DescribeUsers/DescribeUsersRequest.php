<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
