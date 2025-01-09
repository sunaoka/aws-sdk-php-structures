<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredAudienceModelAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelAssociationIdentifier
 * @property string $membershipIdentifier
 */
class DeleteConfiguredAudienceModelAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredAudienceModelAssociationIdentifier: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
