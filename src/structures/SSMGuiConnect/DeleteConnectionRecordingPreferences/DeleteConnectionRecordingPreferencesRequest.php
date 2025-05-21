<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\DeleteConnectionRecordingPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 */
class DeleteConnectionRecordingPreferencesRequest extends Request
{
    /**
     * @param array{ClientToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
