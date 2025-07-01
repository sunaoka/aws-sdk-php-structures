<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string|null $domainUnitId
 * @property Shapes\EnvironmentDeploymentDetails|null $environmentDeploymentDetails
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property string|null $name
 * @property string|null $projectProfileVersion
 * @property list<Shapes\EnvironmentConfigurationUserParameter>|null $userParameters
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     domainUnitId?: string|null,
     *     environmentDeploymentDetails?: Shapes\EnvironmentDeploymentDetails|null,
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     name?: string|null,
     *     projectProfileVersion?: string|null,
     *     userParameters?: list<Shapes\EnvironmentConfigurationUserParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
