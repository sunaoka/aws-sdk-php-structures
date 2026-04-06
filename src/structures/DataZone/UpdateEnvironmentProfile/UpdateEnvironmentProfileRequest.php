<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 */
class UpdateEnvironmentProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
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
