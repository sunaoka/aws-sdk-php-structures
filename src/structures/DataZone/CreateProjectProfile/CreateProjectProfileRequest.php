<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string|null $domainUnitIdentifier
 * @property list<Shapes\EnvironmentConfiguration>|null $environmentConfigurations
 * @property string $name
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class CreateProjectProfileRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     domainUnitIdentifier?: string|null,
     *     environmentConfigurations?: list<Shapes\EnvironmentConfiguration>|null,
     *     name: string,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
