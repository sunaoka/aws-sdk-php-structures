<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateRegistrationsFromBrandProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property list<string> $registrationIds
 * @property bool|null $smartMatch
 * @property 'REPLACE'|'PRESERVE'|null $onAttributeConflict
 * @property string|null $clientToken
 */
class UpdateRegistrationsFromBrandProfileRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     registrationIds: list<string>,
     *     smartMatch?: bool|null,
     *     onAttributeConflict?: 'REPLACE'|'PRESERVE'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
