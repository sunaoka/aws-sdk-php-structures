<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Grantor
 * @property string|null $Grantee
 * @property string|null $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $AuthorizeTime
 * @property string|null $ClusterStatus
 * @property 'Authorized'|'Revoking'|null $Status
 * @property bool|null $AllowedAllVPCs
 * @property list<string>|null $AllowedVPCs
 * @property int|null $EndpointCount
 */
class EndpointAuthorization extends Shape
{
    /**
     * @param array{
     *     Grantor?: string|null,
     *     Grantee?: string|null,
     *     ClusterIdentifier?: string|null,
     *     AuthorizeTime?: \Aws\Api\DateTimeResult|null,
     *     ClusterStatus?: string|null,
     *     Status?: 'Authorized'|'Revoking'|null,
     *     AllowedAllVPCs?: bool|null,
     *     AllowedVPCs?: list<string>|null,
     *     EndpointCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
