<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Certificate
 * @property Shapes\ProtocolDetails|null $ProtocolDetails
 * @property Shapes\EndpointDetails|null $EndpointDetails
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null $EndpointType
 * @property string|null $HostKey
 * @property Shapes\IdentityProviderDetails|null $IdentityProviderDetails
 * @property string|null $LoggingRole
 * @property string|null $PostAuthenticationLoginBanner
 * @property string|null $PreAuthenticationLoginBanner
 * @property list<'SFTP'|'FTP'|'FTPS'|'AS2'>|null $Protocols
 * @property string|null $SecurityPolicyName
 * @property string $ServerId
 * @property Shapes\WorkflowDetails|null $WorkflowDetails
 * @property list<string>|null $StructuredLogDestinations
 * @property Shapes\S3StorageOptions|null $S3StorageOptions
 */
class UpdateServerRequest extends Request
{
    /**
     * @param array{
     *     Certificate?: string|null,
     *     ProtocolDetails?: Shapes\ProtocolDetails|null,
     *     EndpointDetails?: Shapes\EndpointDetails|null,
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT'|null,
     *     HostKey?: string|null,
     *     IdentityProviderDetails?: Shapes\IdentityProviderDetails|null,
     *     LoggingRole?: string|null,
     *     PostAuthenticationLoginBanner?: string|null,
     *     PreAuthenticationLoginBanner?: string|null,
     *     Protocols?: list<'SFTP'|'FTP'|'FTPS'|'AS2'>|null,
     *     SecurityPolicyName?: string|null,
     *     ServerId: string,
     *     WorkflowDetails?: Shapes\WorkflowDetails|null,
     *     StructuredLogDestinations?: list<string>|null,
     *     S3StorageOptions?: Shapes\S3StorageOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
