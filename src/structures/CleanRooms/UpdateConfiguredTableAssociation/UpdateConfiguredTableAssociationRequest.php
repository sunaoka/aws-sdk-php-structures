<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableAssociationIdentifier
 * @property string $membershipIdentifier
 * @property string|null $description
 * @property string|null $roleArn
 */
class UpdateConfiguredTableAssociationRequest extends Request
{
    /**
     * @param array{
     *     configuredTableAssociationIdentifier: string,
     *     membershipIdentifier: string,
     *     description?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
