<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainIdentifier
 * @property string $domainUnitIdentifier
 * @property list<Shapes\EnvironmentConfiguration> $environmentConfigurations
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $status
 */
class CreateProjectProfileRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainIdentifier: string,
     *     domainUnitIdentifier?: string,
     *     environmentConfigurations?: list<Shapes\EnvironmentConfiguration>,
     *     name: string,
     *     status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
