<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $resourceTags
 * @property list<string>|null $glossaryTerms
 * @property string|null $domainUnitId
 * @property string|null $projectProfileId
 * @property list<Shapes\EnvironmentConfigurationUserParameter>|null $userParameters
 * @property string|null $projectCategory
 * @property string|null $projectExecutionRole
 * @property list<Shapes\ProjectMembershipAssignment>|null $membershipAssignments
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     resourceTags?: array<string, string>|null,
     *     glossaryTerms?: list<string>|null,
     *     domainUnitId?: string|null,
     *     projectProfileId?: string|null,
     *     userParameters?: list<Shapes\EnvironmentConfigurationUserParameter>|null,
     *     projectCategory?: string|null,
     *     projectExecutionRole?: string|null,
     *     membershipAssignments?: list<Shapes\ProjectMembershipAssignment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
