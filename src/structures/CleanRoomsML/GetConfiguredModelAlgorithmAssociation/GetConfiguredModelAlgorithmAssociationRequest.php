<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $membershipIdentifier
 */
class GetConfiguredModelAlgorithmAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredModelAlgorithmAssociationArn: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
