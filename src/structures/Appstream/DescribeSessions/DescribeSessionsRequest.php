<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $FleetName
 * @property string|null $UserId
 * @property string|null $NextToken
 * @property int|null $Limit
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD'|null $AuthenticationType
 */
class DescribeSessionsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     FleetName: string,
     *     UserId?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int|null,
     *     AuthenticationType?: 'API'|'SAML'|'USERPOOL'|'AWS_AD'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
