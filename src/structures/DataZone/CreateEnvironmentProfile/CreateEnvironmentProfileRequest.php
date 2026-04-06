<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string|null $description
 * @property string $environmentBlueprintIdentifier
 * @property string $projectIdentifier
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 */
class CreateEnvironmentProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     environmentBlueprintIdentifier: string,
     *     projectIdentifier: string,
     *     userParameters?: list<Shapes\EnvironmentParameter>|null,
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
