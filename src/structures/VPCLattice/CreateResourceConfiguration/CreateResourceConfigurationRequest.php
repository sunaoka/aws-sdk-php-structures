<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN'|'CIDR' $type
 * @property list<string>|null $portRanges
 * @property 'TCP'|'TCP_UDP'|null $protocol
 * @property string|null $resourceGatewayIdentifier
 * @property string|null $resourceConfigurationGroupIdentifier
 * @property Shapes\ResourceConfigurationDefinition|null $resourceConfigurationDefinition
 * @property bool|null $allowAssociationToShareableServiceNetwork
 * @property string|null $customDomainName
 * @property string|null $groupDomain
 * @property string|null $domainVerificationIdentifier
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateResourceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'GROUP'|'CHILD'|'SINGLE'|'ARN'|'CIDR',
     *     portRanges?: list<string>|null,
     *     protocol?: 'TCP'|'TCP_UDP'|null,
     *     resourceGatewayIdentifier?: string|null,
     *     resourceConfigurationGroupIdentifier?: string|null,
     *     resourceConfigurationDefinition?: Shapes\ResourceConfigurationDefinition|null,
     *     allowAssociationToShareableServiceNetwork?: bool|null,
     *     customDomainName?: string|null,
     *     groupDomain?: string|null,
     *     domainVerificationIdentifier?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
