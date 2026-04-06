<?php

namespace Sunaoka\Aws\Structures\ApiGateway\RejectDomainNameAccessAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainNameAccessAssociationArn
 * @property string $domainNameArn
 */
class RejectDomainNameAccessAssociationRequest extends Request
{
    /**
     * @param array{
     *     domainNameAccessAssociationArn: string,
     *     domainNameArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
