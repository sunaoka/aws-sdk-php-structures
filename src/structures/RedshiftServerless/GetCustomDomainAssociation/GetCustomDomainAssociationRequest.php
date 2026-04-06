<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetCustomDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customDomainName
 * @property string $workgroupName
 */
class GetCustomDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     customDomainName: string,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
