<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 */
class UpdateEnvironmentProfileRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     userParameters?: list<Shapes\EnvironmentParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
