<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfileFromRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registrationId
 * @property string $brandProfileName
 * @property bool|null $smartMatch
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateBrandProfileFromRegistrationRequest extends Request
{
    /**
     * @param array{
     *     registrationId: string,
     *     brandProfileName: string,
     *     smartMatch?: bool|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
