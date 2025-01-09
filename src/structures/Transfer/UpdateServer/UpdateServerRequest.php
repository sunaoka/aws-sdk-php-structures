<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Certificate
 * @property Shapes\ProtocolDetails $ProtocolDetails
 * @property Shapes\EndpointDetails $EndpointDetails
 * @property 'PUBLIC'|'VPC'|'VPC_ENDPOINT' $EndpointType
 * @property string $HostKey
 * @property Shapes\IdentityProviderDetails $IdentityProviderDetails
 * @property string $LoggingRole
 * @property string $PostAuthenticationLoginBanner
 * @property string $PreAuthenticationLoginBanner
 * @property list<'SFTP'|'FTP'|'FTPS'|'AS2'> $Protocols
 * @property string $SecurityPolicyName
 * @property string $ServerId
 * @property Shapes\WorkflowDetails $WorkflowDetails
 * @property list<string> $StructuredLogDestinations
 * @property Shapes\S3StorageOptions $S3StorageOptions
 */
class UpdateServerRequest extends Request
{
    /**
     * @param array{
     *     Certificate?: string,
     *     ProtocolDetails?: Shapes\ProtocolDetails,
     *     EndpointDetails?: Shapes\EndpointDetails,
     *     EndpointType?: 'PUBLIC'|'VPC'|'VPC_ENDPOINT',
     *     HostKey?: string,
     *     IdentityProviderDetails?: Shapes\IdentityProviderDetails,
     *     LoggingRole?: string,
     *     PostAuthenticationLoginBanner?: string,
     *     PreAuthenticationLoginBanner?: string,
     *     Protocols?: list<'SFTP'|'FTP'|'FTPS'|'AS2'>,
     *     SecurityPolicyName?: string,
     *     ServerId: string,
     *     WorkflowDetails?: Shapes\WorkflowDetails,
     *     StructuredLogDestinations?: list<string>,
     *     S3StorageOptions?: Shapes\S3StorageOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
