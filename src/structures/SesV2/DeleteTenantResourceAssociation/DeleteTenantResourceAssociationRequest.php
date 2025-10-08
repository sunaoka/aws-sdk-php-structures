<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteTenantResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 * @property string $ResourceArn
 */
class DeleteTenantResourceAssociationRequest extends Request
{
    /**
     * @param array{
     *     TenantName: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
