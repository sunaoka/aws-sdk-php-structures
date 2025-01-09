<?php

namespace Sunaoka\Aws\Structures\Chime\GetRetentionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class GetRetentionSettingsRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
