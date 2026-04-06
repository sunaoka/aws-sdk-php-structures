<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $Certificate
 * @property ProtocolDetails|null $ProtocolDetails
 * @property 'S3'|'EFS'|null $Domain
 * @property EndpointDetails|null $EndpointDetails
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null $EndpointType
 * @property string|null $HostKeyFingerprint
 * @property IdentityProviderDetails|null $IdentityProviderDetails
 * @property 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA'|null $IdentityProviderType
 * @property string|null $LoggingRole
 * @property string|null $PostAuthenticationLoginBanner
 * @property string|null $PreAuthenticationLoginBanner
 * @property list<'SFTP'|'FTP'|'FTPS'|'AS2'>|null $Protocols
 * @property string|null $SecurityPolicyName
 * @property string|null $ServerId
 * @property 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED'|null $State
 * @property list<Tag>|null $Tags
 * @property int|null $UserCount
 * @property WorkflowDetails|null $WorkflowDetails
 * @property list<string>|null $StructuredLogDestinations
 * @property S3StorageOptions|null $S3StorageOptions
 * @property list<string>|null $As2ServiceManagedEgressIpAddresses
 * @property 'IPV4'|'DUALSTACK'|null $IpAddressType
 */
class DescribedServer extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Certificate?: string|null,
     *     ProtocolDetails?: ProtocolDetails|null,
     *     Domain?: 'S3'|'EFS'|null,
     *     EndpointDetails?: EndpointDetails|null,
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null,
     *     HostKeyFingerprint?: string|null,
     *     IdentityProviderDetails?: IdentityProviderDetails|null,
     *     IdentityProviderType?: 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA'|null,
     *     LoggingRole?: string|null,
     *     PostAuthenticationLoginBanner?: string|null,
     *     PreAuthenticationLoginBanner?: string|null,
     *     Protocols?: list<'SFTP'|'FTP'|'FTPS'|'AS2'>|null,
     *     SecurityPolicyName?: string|null,
     *     ServerId?: string|null,
     *     State?: 'OFFLINE'|'ONLINE'|'STARTING'|'STOPPING'|'START_FAILED'|'STOP_FAILED'|null,
     *     Tags?: list<Tag>|null,
     *     UserCount?: int|null,
     *     WorkflowDetails?: WorkflowDetails|null,
     *     StructuredLogDestinations?: list<string>|null,
     *     S3StorageOptions?: S3StorageOptions|null,
     *     As2ServiceManagedEgressIpAddresses?: list<string>|null,
     *     IpAddressType?: 'IPV4'|'DUALSTACK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
