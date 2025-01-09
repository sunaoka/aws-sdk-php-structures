<?php

namespace Sunaoka\Aws\Structures\Chime\GetAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class GetAccountSettingsRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
