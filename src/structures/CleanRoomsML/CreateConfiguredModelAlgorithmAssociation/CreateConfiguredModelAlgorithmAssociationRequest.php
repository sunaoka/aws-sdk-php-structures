<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $configuredModelAlgorithmArn
 * @property string $name
 * @property string|null $description
 * @property Shapes\PrivacyConfiguration|null $privacyConfiguration
 * @property array<string, string>|null $tags
 */
class CreateConfiguredModelAlgorithmAssociationRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredModelAlgorithmArn: string,
     *     name: string,
     *     description?: string|null,
     *     privacyConfiguration?: Shapes\PrivacyConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
