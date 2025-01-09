<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 */
class GetApiAssociationRequest extends Request
{
    /**
     * @param array{domainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
