<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string|null $domainUnitId
 * @property list<string>|null $glossaryTerms
 * @property string $name
 * @property string|null $projectProfileId
 * @property array<string, string>|null $resourceTags
 * @property list<Shapes\EnvironmentConfigurationUserParameter>|null $userParameters
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     domainUnitId?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     name: string,
     *     projectProfileId?: string|null,
     *     resourceTags?: array<string, string>|null,
     *     userParameters?: list<Shapes\EnvironmentConfigurationUserParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
