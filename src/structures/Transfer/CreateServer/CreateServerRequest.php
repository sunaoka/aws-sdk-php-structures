<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Certificate
 * @property 'S3'|'EFS' $Domain
 * @property Shapes\EndpointDetails $EndpointDetails
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT' $EndpointType
 * @property string $HostKey
 * @property Shapes\IdentityProviderDetails $IdentityProviderDetails
 * @property 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA' $IdentityProviderType
 * @property string $LoggingRole
 * @property string $PostAuthenticationLoginBanner
 * @property string $PreAuthenticationLoginBanner
 * @property list<'SFTP'|'FTP'|'FTPS'|'AS2'> $Protocols
 * @property Shapes\ProtocolDetails $ProtocolDetails
 * @property string $SecurityPolicyName
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\WorkflowDetails $WorkflowDetails
 * @property list<string> $StructuredLogDestinations
 * @property Shapes\S3StorageOptions $S3StorageOptions
 */
class CreateServerRequest extends Request
{
    /**
     * @param array{
     *     Certificate?: string,
     *     Domain?: 'S3'|'EFS',
     *     EndpointDetails?: Shapes\EndpointDetails,
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT',
     *     HostKey?: string,
     *     IdentityProviderDetails?: Shapes\IdentityProviderDetails,
     *     IdentityProviderType?: 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA',
     *     LoggingRole?: string,
     *     PostAuthenticationLoginBanner?: string,
     *     PreAuthenticationLoginBanner?: string,
     *     Protocols?: list<'SFTP'|'FTP'|'FTPS'|'AS2'>,
     *     ProtocolDetails?: Shapes\ProtocolDetails,
     *     SecurityPolicyName?: string,
     *     Tags?: list<Shapes\Tag>,
     *     WorkflowDetails?: Shapes\WorkflowDetails,
     *     StructuredLogDestinations?: list<string>,
     *     S3StorageOptions?: Shapes\S3StorageOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
