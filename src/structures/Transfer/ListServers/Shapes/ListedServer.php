<?php

namespace Sunaoka\Aws\Structures\Transfer\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'S3'|'EFS' $Domain
 * @property 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA' $IdentityProviderType
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT' $EndpointType
 * @property string $LoggingRole
 * @property string $ServerId
 * @property 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED' $State
 * @property int $UserCount
 */
class ListedServer extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Domain?: 'S3'|'EFS',
     *     IdentityProviderType?: 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA',
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT',
     *     LoggingRole?: string,
     *     ServerId?: string,
     *     State?: 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED',
     *     UserCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
