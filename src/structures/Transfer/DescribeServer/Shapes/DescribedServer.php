<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Certificate
 * @property ProtocolDetails $ProtocolDetails
 * @property 'S3'|'EFS' $Domain
 * @property EndpointDetails $EndpointDetails
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT' $EndpointType
 * @property string $HostKeyFingerprint
 * @property IdentityProviderDetails $IdentityProviderDetails
 * @property 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA' $IdentityProviderType
 * @property string $LoggingRole
 * @property string $PostAuthenticationLoginBanner
 * @property string $PreAuthenticationLoginBanner
 * @property list<'SFTP'|'FTP'|'FTPS'|'AS2'> $Protocols
 * @property string $SecurityPolicyName
 * @property string $ServerId
 * @property 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED' $State
 * @property list<Tag> $Tags
 * @property int $UserCount
 * @property WorkflowDetails $WorkflowDetails
 * @property list<string> $StructuredLogDestinations
 * @property S3StorageOptions $S3StorageOptions
 * @property list<string> $As2ServiceManagedEgressIpAddresses
 */
class DescribedServer extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Certificate?: string,
     *     ProtocolDetails?: ProtocolDetails,
     *     Domain?: 'S3'|'EFS',
     *     EndpointDetails?: EndpointDetails,
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT',
     *     HostKeyFingerprint?: string,
     *     IdentityProviderDetails?: IdentityProviderDetails,
     *     IdentityProviderType?: 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA',
     *     LoggingRole?: string,
     *     PostAuthenticationLoginBanner?: string,
     *     PreAuthenticationLoginBanner?: string,
     *     Protocols?: list<'SFTP'|'FTP'|'FTPS'|'AS2'>,
     *     SecurityPolicyName?: string,
     *     ServerId?: string,
     *     State?: 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED',
     *     Tags?: list<Tag>,
     *     UserCount?: int,
     *     WorkflowDetails?: WorkflowDetails,
     *     StructuredLogDestinations?: list<string>,
     *     S3StorageOptions?: S3StorageOptions,
     *     As2ServiceManagedEgressIpAddresses?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
