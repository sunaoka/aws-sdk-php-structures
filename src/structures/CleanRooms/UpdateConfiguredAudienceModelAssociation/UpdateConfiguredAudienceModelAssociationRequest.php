<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredAudienceModelAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelAssociationIdentifier
 * @property string $membershipIdentifier
 * @property string|null $description
 * @property string|null $name
 */
class UpdateConfiguredAudienceModelAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredAudienceModelAssociationIdentifier: string,
     *     membershipIdentifier: string,
     *     description?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
