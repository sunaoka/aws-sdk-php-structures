<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $collaborationIdentifier
 */
class GetCollaborationConfiguredModelAlgorithmAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredModelAlgorithmAssociationArn: string,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
