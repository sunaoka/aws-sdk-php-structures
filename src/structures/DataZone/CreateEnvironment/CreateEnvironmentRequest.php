<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectIdentifier
 * @property string $domainIdentifier
 * @property string|null $description
 * @property string $name
 * @property string|null $environmentProfileIdentifier
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 * @property list<string>|null $glossaryTerms
 * @property string|null $environmentAccountIdentifier
 * @property string|null $environmentAccountRegion
 * @property string|null $environmentBlueprintIdentifier
 * @property int|null $deploymentOrder
 * @property string|null $environmentConfigurationId
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     projectIdentifier: string,
     *     domainIdentifier: string,
     *     description?: string|null,
     *     name: string,
     *     environmentProfileIdentifier?: string|null,
     *     userParameters?: list<Shapes\EnvironmentParameter>|null,
     *     glossaryTerms?: list<string>|null,
     *     environmentAccountIdentifier?: string|null,
     *     environmentAccountRegion?: string|null,
     *     environmentBlueprintIdentifier?: string|null,
     *     deploymentOrder?: int|null,
     *     environmentConfigurationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
