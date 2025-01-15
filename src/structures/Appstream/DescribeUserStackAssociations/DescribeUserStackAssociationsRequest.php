<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUserStackAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackName
 * @property string|null $UserName
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD'|null $AuthenticationType
 * @property int<0, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeUserStackAssociationsRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     UserName?: string|null,
     *     AuthenticationType?: 'API'|'SAML'|'USERPOOL'|'AWS_AD'|null,
     *     MaxResults?: int<0, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
