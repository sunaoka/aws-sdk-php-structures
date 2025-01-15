<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateStandardsControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StandardsControlArn
 * @property 'ENABLED'|'DISABLED'|null $ControlStatus
 * @property string|null $DisabledReason
 */
class UpdateStandardsControlRequest extends Request
{
    /**
     * @param array{
     *     StandardsControlArn: string,
     *     ControlStatus?: 'ENABLED'|'DISABLED'|null,
     *     DisabledReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
