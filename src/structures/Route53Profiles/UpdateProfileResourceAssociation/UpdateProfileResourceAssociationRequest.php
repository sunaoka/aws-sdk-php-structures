<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\UpdateProfileResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileResourceAssociationId
 * @property string|null $Name
 * @property string|null $ResourceProperties
 */
class UpdateProfileResourceAssociationRequest extends Request
{
    /**
     * @param array{
     *     ProfileResourceAssociationId: string,
     *     Name?: string|null,
     *     ResourceProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
