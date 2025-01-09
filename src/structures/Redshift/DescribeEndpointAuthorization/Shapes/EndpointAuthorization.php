<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Grantor
 * @property string $Grantee
 * @property string $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult $AuthorizeTime
 * @property string $ClusterStatus
 * @property 'Authorized'|'Revoking' $Status
 * @property bool $AllowedAllVPCs
 * @property list<string> $AllowedVPCs
 * @property int $EndpointCount
 */
class EndpointAuthorization extends Shape
{
    /**
     * @param array{
     *     Grantor?: string,
     *     Grantee?: string,
     *     ClusterIdentifier?: string,
     *     AuthorizeTime?: \Aws\Api\DateTimeResult,
     *     ClusterStatus?: string,
     *     Status?: 'Authorized'|'Revoking',
     *     AllowedAllVPCs?: bool,
     *     AllowedVPCs?: list<string>,
     *     EndpointCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
