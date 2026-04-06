<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property Shapes\EnvironmentDeploymentDetails|null $environmentDeploymentDetails
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property string|null $name
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     environmentDeploymentDetails?: Shapes\EnvironmentDeploymentDetails|null,
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
