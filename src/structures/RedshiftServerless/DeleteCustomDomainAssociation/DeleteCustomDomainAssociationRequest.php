<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteCustomDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customDomainName
 * @property string $workgroupName
 */
class DeleteCustomDomainAssociationRequest extends Request
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
