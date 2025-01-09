<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableAssociationIdentifier
 * @property string $membershipIdentifier
 * @property string $description
 * @property string $roleArn
 */
class UpdateConfiguredTableAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredTableAssociationIdentifier: string,
     *     membershipIdentifier: string,
     *     description?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
