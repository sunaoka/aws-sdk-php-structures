<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateSubdomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subdomainName
 * @property 'ASSOCIATE'|'DISASSOCIATE'|'TRANSFER' $action
 * @property string|null $targetResourceArn
 */
class UpdateSubdomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     subdomainName: string,
     *     action: 'ASSOCIATE'|'DISASSOCIATE'|'TRANSFER',
     *     targetResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
