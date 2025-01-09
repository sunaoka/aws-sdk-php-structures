<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateOutboundConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DomainInformationContainer $LocalDomainInfo
 * @property Shapes\DomainInformationContainer $RemoteDomainInfo
 * @property string $ConnectionAlias
 * @property 'DIRECT'|'VPC_ENDPOINT' $ConnectionMode
 * @property Shapes\ConnectionProperties $ConnectionProperties
 */
class CreateOutboundConnectionRequest extends Request
{
    /**
     * @param array{
     *     LocalDomainInfo: Shapes\DomainInformationContainer,
     *     RemoteDomainInfo: Shapes\DomainInformationContainer,
     *     ConnectionAlias: string,
     *     ConnectionMode?: 'DIRECT'|'VPC_ENDPOINT',
     *     ConnectionProperties?: Shapes\ConnectionProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
