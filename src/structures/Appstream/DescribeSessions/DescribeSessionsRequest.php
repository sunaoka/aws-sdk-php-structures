<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $FleetName
 * @property string $UserId
 * @property string $NextToken
 * @property int $Limit
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 * @property string $InstanceId
 */
class DescribeSessionsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     FleetName: string,
     *     UserId?: string,
     *     NextToken?: string,
     *     Limit?: int,
     *     AuthenticationType?: 'API'|'SAML'|'USERPOOL'|'AWS_AD',
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
