<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property array<string, string>|null $resourceTags
 * @property list<string>|null $glossaryTerms
 * @property string|null $domainUnitId
 * @property Shapes\EnvironmentDeploymentDetails|null $environmentDeploymentDetails
 * @property list<Shapes\EnvironmentConfigurationUserParameter>|null $userParameters
 * @property string|null $projectProfileVersion
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     resourceTags?: array<string, string>|null,
     *     glossaryTerms?: list<string>|null,
     *     domainUnitId?: string|null,
     *     environmentDeploymentDetails?: Shapes\EnvironmentDeploymentDetails|null,
     *     userParameters?: list<Shapes\EnvironmentConfigurationUserParameter>|null,
     *     projectProfileVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
