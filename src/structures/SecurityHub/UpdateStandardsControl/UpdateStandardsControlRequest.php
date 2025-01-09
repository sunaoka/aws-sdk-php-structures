<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateStandardsControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StandardsControlArn
 * @property 'ENABLED'|'DISABLED' $ControlStatus
 * @property string $DisabledReason
 */
class UpdateStandardsControlRequest extends Request
{
    /**
     * @param array{
     *     StandardsControlArn: string,
     *     ControlStatus?: 'ENABLED'|'DISABLED',
     *     DisabledReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
