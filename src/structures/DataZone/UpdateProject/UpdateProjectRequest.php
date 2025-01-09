<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainIdentifier
 * @property Shapes\EnvironmentDeploymentDetails $environmentDeploymentDetails
 * @property list<string> $glossaryTerms
 * @property string $identifier
 * @property string $name
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainIdentifier: string,
     *     environmentDeploymentDetails?: Shapes\EnvironmentDeploymentDetails,
     *     glossaryTerms?: list<string>,
     *     identifier: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
