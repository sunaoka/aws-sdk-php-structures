<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $membershipIdentifier
 * @property string $configuredTableIdentifier
 * @property string $roleArn
 * @property array<string, string>|null $tags
 */
class CreateConfiguredTableAssociationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     membershipIdentifier: string,
     *     configuredTableIdentifier: string,
     *     roleArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
