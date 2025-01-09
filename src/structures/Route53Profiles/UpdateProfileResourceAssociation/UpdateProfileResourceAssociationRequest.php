<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\UpdateProfileResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ProfileResourceAssociationId
 * @property string $ResourceProperties
 */
class UpdateProfileResourceAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     ProfileResourceAssociationId: string,
     *     ResourceProperties?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
