<?php

namespace Sunaoka\Aws\Structures\Chime\GetUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $UserId
 */
class GetUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
