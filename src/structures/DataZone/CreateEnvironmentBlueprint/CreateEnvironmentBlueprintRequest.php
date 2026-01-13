<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string|null $description
 * @property Shapes\ProvisioningProperties $provisioningProperties
 * @property list<Shapes\CustomParameter>|null $userParameters
 */
class CreateEnvironmentBlueprintRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     provisioningProperties: Shapes\ProvisioningProperties,
     *     userParameters?: list<Shapes\CustomParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
