<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $configuredModelAlgorithmArn
 * @property string $name
 * @property string $description
 * @property Shapes\PrivacyConfiguration $privacyConfiguration
 * @property array<string, string> $tags
 */
class CreateConfiguredModelAlgorithmAssociationRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredModelAlgorithmArn: string,
     *     name: string,
     *     description?: string,
     *     privacyConfiguration?: Shapes\PrivacyConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
