<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateTenantResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 * @property string $ResourceArn
 */
class CreateTenantResourceAssociationRequest extends Request
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
