<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUserStackAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $UserName
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 * @property int<0, 500> $MaxResults
 * @property string $NextToken
 */
class DescribeUserStackAssociationsRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string,
     *     UserName?: string,
     *     AuthenticationType?: 'API'|'SAML'|'USERPOOL'|'AWS_AD',
     *     MaxResults?: int<0, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
