<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ORG_INTEGRATION' $key
 * @property 'ENABLED'|'DISABLED' $state
 */
class PreferenceUpdate extends Shape
{
    /**
     * @param array{
     *     key: 'ORG_INTEGRATION',
     *     state: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
