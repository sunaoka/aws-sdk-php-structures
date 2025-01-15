<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredAudienceModelAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $configuredAudienceModelArn
 * @property string $configuredAudienceModelAssociationName
 * @property bool $manageResourcePolicies
 * @property array<string, string>|null $tags
 * @property string|null $description
 */
class CreateConfiguredAudienceModelAssociationRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredAudienceModelArn: string,
     *     configuredAudienceModelAssociationName: string,
     *     manageResourcePolicies: bool,
     *     tags?: array<string, string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
