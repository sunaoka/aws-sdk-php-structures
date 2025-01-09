<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationConfiguredAudienceModelAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $configuredAudienceModelAssociationIdentifier
 */
class GetCollaborationConfiguredAudienceModelAssociationRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     configuredAudienceModelAssociationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
