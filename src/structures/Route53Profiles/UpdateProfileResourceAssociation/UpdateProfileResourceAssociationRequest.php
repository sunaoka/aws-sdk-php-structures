<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\UpdateProfileResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $ProfileResourceAssociationId
 * @property string|null $ResourceProperties
 */
class UpdateProfileResourceAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ProfileResourceAssociationId: string,
     *     ResourceProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
