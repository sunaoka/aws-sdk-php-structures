<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property string $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $name
 * @property list<Shapes\EnvironmentParameter> $userParameters
 */
class UpdateEnvironmentProfileRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsAccountRegion?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string,
     *     userParameters?: list<Shapes\EnvironmentParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
