<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateAuditStreamConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string|null $AuditStreamArn
 */
class UpdateAuditStreamConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     AuditStreamArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
