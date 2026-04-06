<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\UpdateConnectionRecordingPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\ConnectionRecordingPreferences $ConnectionRecordingPreferences
 */
class UpdateConnectionRecordingPreferencesRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ConnectionRecordingPreferences: Shapes\ConnectionRecordingPreferences
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
