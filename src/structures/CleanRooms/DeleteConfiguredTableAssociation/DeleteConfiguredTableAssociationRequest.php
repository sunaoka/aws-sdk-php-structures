<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTableAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableAssociationIdentifier
 * @property string $membershipIdentifier
 */
class DeleteConfiguredTableAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredTableAssociationIdentifier: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
