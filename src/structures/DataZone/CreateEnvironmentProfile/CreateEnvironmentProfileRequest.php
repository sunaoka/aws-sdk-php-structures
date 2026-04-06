<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $environmentBlueprintIdentifier
 * @property string $name
 * @property string $projectIdentifier
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 */
class CreateEnvironmentProfileRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier: string,
     *     name: string,
     *     projectIdentifier: string,
     *     userParameters?: list<Shapes\EnvironmentParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
