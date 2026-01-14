<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $description
 * @property Shapes\ProvisioningProperties|null $provisioningProperties
 * @property list<Shapes\CustomParameter>|null $userParameters
 */
class UpdateEnvironmentBlueprintRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     description?: string|null,
     *     provisioningProperties?: Shapes\ProvisioningProperties|null,
     *     userParameters?: list<Shapes\CustomParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
