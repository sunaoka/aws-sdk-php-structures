<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $name
 * @property Shapes\ProvisioningProperties $provisioningProperties
 * @property list<Shapes\CustomParameter>|null $userParameters
 */
class CreateEnvironmentBlueprintRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     name: string,
     *     provisioningProperties: Shapes\ProvisioningProperties,
     *     userParameters?: list<Shapes\CustomParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
