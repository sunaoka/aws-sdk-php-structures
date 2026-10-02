<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateRegistrationsFromBrandProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property list<string> $registrationTypes
 * @property bool|null $smartMatch
 * @property string|null $clientToken
 */
class CreateRegistrationsFromBrandProfileRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     registrationTypes: list<string>,
     *     smartMatch?: bool|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
