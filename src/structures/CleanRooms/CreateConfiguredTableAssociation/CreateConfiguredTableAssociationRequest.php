<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $membershipIdentifier
 * @property string $configuredTableIdentifier
 * @property string $roleArn
 * @property array<string, string> $tags
 */
class CreateConfiguredTableAssociationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     membershipIdentifier: string,
     *     configuredTableIdentifier: string,
     *     roleArn: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
