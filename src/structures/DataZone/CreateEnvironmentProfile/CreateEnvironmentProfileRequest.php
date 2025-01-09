<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property string $description
 * @property string $domainIdentifier
 * @property string $environmentBlueprintIdentifier
 * @property string $name
 * @property string $projectIdentifier
 * @property list<Shapes\EnvironmentParameter> $userParameters
 */
class CreateEnvironmentProfileRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsAccountRegion?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier: string,
     *     name: string,
     *     projectIdentifier: string,
     *     userParameters?: list<Shapes\EnvironmentParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
