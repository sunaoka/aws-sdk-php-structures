<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property list<Shapes\ResourceTagParameter>|null $projectResourceTags
 * @property bool|null $allowCustomProjectResourceTags
 * @property string|null $projectResourceTagsDescription
 * @property list<Shapes\EnvironmentConfiguration>|null $environmentConfigurations
 * @property string|null $domainUnitIdentifier
 */
class UpdateProjectProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     projectResourceTags?: list<Shapes\ResourceTagParameter>|null,
     *     allowCustomProjectResourceTags?: bool|null,
     *     projectResourceTagsDescription?: string|null,
     *     environmentConfigurations?: list<Shapes\EnvironmentConfiguration>|null,
     *     domainUnitIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
