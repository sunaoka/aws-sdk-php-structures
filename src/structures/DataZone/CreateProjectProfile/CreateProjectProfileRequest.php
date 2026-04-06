<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property list<Shapes\ResourceTagParameter>|null $projectResourceTags
 * @property bool|null $allowCustomProjectResourceTags
 * @property string|null $projectResourceTagsDescription
 * @property list<Shapes\EnvironmentConfiguration>|null $environmentConfigurations
 * @property string|null $domainUnitIdentifier
 */
class CreateProjectProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
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
