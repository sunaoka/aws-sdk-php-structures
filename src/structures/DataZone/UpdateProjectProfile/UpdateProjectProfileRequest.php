<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $allowCustomProjectResourceTags
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string|null $domainUnitIdentifier
 * @property list<Shapes\EnvironmentConfiguration>|null $environmentConfigurations
 * @property string $identifier
 * @property string|null $name
 * @property list<Shapes\ResourceTagParameter>|null $projectResourceTags
 * @property string|null $projectResourceTagsDescription
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class UpdateProjectProfileRequest extends Request
{
    /**
     * @param array{
     *     allowCustomProjectResourceTags?: bool|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     domainUnitIdentifier?: string|null,
     *     environmentConfigurations?: list<Shapes\EnvironmentConfiguration>|null,
     *     identifier: string,
     *     name?: string|null,
     *     projectResourceTags?: list<Shapes\ResourceTagParameter>|null,
     *     projectResourceTagsDescription?: string|null,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
