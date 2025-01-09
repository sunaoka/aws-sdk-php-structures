<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredAudienceModelAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelAssociationIdentifier
 * @property string $membershipIdentifier
 * @property string $description
 * @property string $name
 */
class UpdateConfiguredAudienceModelAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredAudienceModelAssociationIdentifier: string,
     *     membershipIdentifier: string,
     *     description?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
