<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteIntegrationAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $IntegrationAssociationId
 */
class DeleteIntegrationAssociationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationAssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
