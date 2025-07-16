<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $deploymentOrder
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string|null $environmentAccountIdentifier
 * @property string|null $environmentAccountRegion
 * @property string|null $environmentBlueprintIdentifier
 * @property string|null $environmentConfigurationId
 * @property string|null $environmentProfileIdentifier
 * @property list<string>|null $glossaryTerms
 * @property string $name
 * @property string $projectIdentifier
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     deploymentOrder?: int|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     environmentAccountIdentifier?: string|null,
     *     environmentAccountRegion?: string|null,
     *     environmentBlueprintIdentifier?: string|null,
     *     environmentConfigurationId?: string|null,
     *     environmentProfileIdentifier?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     name: string,
     *     projectIdentifier: string,
     *     userParameters?: list<Shapes\EnvironmentParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
