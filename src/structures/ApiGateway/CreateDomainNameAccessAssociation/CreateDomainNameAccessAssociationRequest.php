<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainNameAccessAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainNameArn
 * @property 'VPCE' $accessAssociationSourceType
 * @property string $accessAssociationSource
 * @property array<string, string>|null $tags
 */
class CreateDomainNameAccessAssociationRequest extends Request
{
    /**
     * @param array{
     *     domainNameArn: string,
     *     accessAssociationSourceType: 'VPCE',
     *     accessAssociationSource: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
