<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDomainNameAccessAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainNameAccessAssociationArn
 */
class DeleteDomainNameAccessAssociationRequest extends Request
{
    /**
     * @param array{domainNameAccessAssociationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
