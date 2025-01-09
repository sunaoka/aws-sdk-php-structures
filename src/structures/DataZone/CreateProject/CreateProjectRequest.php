<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainIdentifier
 * @property string $domainUnitId
 * @property list<string> $glossaryTerms
 * @property string $name
 * @property string $projectProfileId
 * @property list<Shapes\EnvironmentConfigurationUserParameter> $userParameters
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainIdentifier: string,
     *     domainUnitId?: string,
     *     glossaryTerms?: list<string>,
     *     name: string,
     *     projectProfileId?: string,
     *     userParameters?: list<Shapes\EnvironmentConfigurationUserParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
