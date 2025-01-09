<?php

namespace Sunaoka\Aws\Structures\Iam\SetSecurityTokenServicePreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'v1Token'|'v2Token' $GlobalEndpointTokenVersion
 */
class SetSecurityTokenServicePreferencesRequest extends Request
{
    /**
     * @param array{GlobalEndpointTokenVersion: 'v1Token'|'v2Token'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
