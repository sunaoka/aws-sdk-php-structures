<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateBrandProfileFromRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property string $registrationId
 * @property bool|null $smartMatch
 * @property 'REPLACE'|'PRESERVE'|null $onAttributeConflict
 * @property string|null $clientToken
 */
class UpdateBrandProfileFromRegistrationRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     registrationId: string,
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
