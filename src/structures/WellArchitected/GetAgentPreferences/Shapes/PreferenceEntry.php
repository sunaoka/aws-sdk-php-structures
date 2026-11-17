<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ORG_INTEGRATION' $key
 * @property 'ENABLED'|'DISABLED'|'FAILED' $status
 * @property string|null $detail
 */
class PreferenceEntry extends Shape
{
    /**
     * @param array{
     *     key: 'ORG_INTEGRATION',
     *     status: 'ENABLED'|'DISABLED'|'FAILED',
     *     detail?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
