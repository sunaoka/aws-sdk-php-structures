<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PreferenceUpdate> $preferences
 */
class PutAgentPreferencesRequest extends Request
{
    /**
     * @param array{preferences: list<Shapes\PreferenceUpdate>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
