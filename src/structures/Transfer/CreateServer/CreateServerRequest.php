<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Certificate
 * @property 'S3'|'EFS'|null $Domain
 * @property Shapes\EndpointDetails|null $EndpointDetails
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null $EndpointType
 * @property string|null $HostKey
 * @property Shapes\IdentityProviderDetails|null $IdentityProviderDetails
 * @property 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA'|null $IdentityProviderType
 * @property string|null $LoggingRole
 * @property string|null $PostAuthenticationLoginBanner
 * @property string|null $PreAuthenticationLoginBanner
 * @property list<'SFTP'|'FTP'|'FTPS'|'AS2'>|null $Protocols
 * @property Shapes\ProtocolDetails|null $ProtocolDetails
 * @property string|null $SecurityPolicyName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\WorkflowDetails|null $WorkflowDetails
 * @property list<string>|null $StructuredLogDestinations
 * @property Shapes\S3StorageOptions|null $S3StorageOptions
 */
class CreateServerRequest extends Request
{
    /**
     * @param array{
     *     Certificate?: string|null,
     *     Domain?: 'S3'|'EFS'|null,
     *     EndpointDetails?: Shapes\EndpointDetails|null,
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null,
     *     HostKey?: string|null,
     *     IdentityProviderDetails?: Shapes\IdentityProviderDetails|null,
     *     IdentityProviderType?: 'SERVICE_MANAGED'|'API_GATEWAY'|'AWS_DIRECTORY_SERVICE'|'AWS_LAMBDA'|null,
     *     LoggingRole?: string|null,
     *     PostAuthenticationLoginBanner?: string|null,
     *     PreAuthenticationLoginBanner?: string|null,
     *     Protocols?: list<'SFTP'|'FTP'|'FTPS'|'AS2'>|null,
     *     ProtocolDetails?: Shapes\ProtocolDetails|null,
     *     SecurityPolicyName?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     WorkflowDetails?: Shapes\WorkflowDetails|null,
     *     StructuredLogDestinations?: list<string>|null,
     *     S3StorageOptions?: Shapes\S3StorageOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
