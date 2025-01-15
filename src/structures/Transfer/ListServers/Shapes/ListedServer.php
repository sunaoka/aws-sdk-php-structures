<?php

namespace Sunaoka\Aws\Structures\Transfer\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'S3'|'EFS'|null $Domain
 * @property 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA'|null $IdentityProviderType
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null $EndpointType
 * @property string|null $LoggingRole
 * @property string|null $ServerId
 * @property 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED'|null $State
 * @property int|null $UserCount
 */
class ListedServer extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Domain?: 'S3'|'EFS'|null,
     *     IdentityProviderType?: 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA'|null,
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null,
     *     LoggingRole?: string|null,
     *     ServerId?: string|null,
     *     State?: 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED'|null,
     *     UserCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
