<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $deploymentOrder
 * @property string $description
 * @property string $domainIdentifier
 * @property string $environmentAccountIdentifier
 * @property string $environmentAccountRegion
 * @property string $environmentBlueprintIdentifier
 * @property string $environmentConfigurationId
 * @property string $environmentProfileIdentifier
 * @property list<string> $glossaryTerms
 * @property string $name
 * @property string $projectIdentifier
 * @property list<Shapes\EnvironmentParameter> $userParameters
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     deploymentOrder?: int,
     *     description?: string,
     *     domainIdentifier: string,
     *     environmentAccountIdentifier?: string,
     *     environmentAccountRegion?: string,
     *     environmentBlueprintIdentifier?: string,
     *     environmentConfigurationId?: string,
     *     environmentProfileIdentifier: string,
     *     glossaryTerms?: list<string>,
     *     name: string,
     *     projectIdentifier: string,
     *     userParameters?: list<Shapes\EnvironmentParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
