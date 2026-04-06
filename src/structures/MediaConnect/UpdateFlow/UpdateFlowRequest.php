<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property Shapes\UpdateFailoverConfig|null $SourceFailoverConfig
 * @property Shapes\UpdateMaintenance|null $Maintenance
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     SourceFailoverConfig?: Shapes\UpdateFailoverConfig|null,
     *     Maintenance?: Shapes\UpdateMaintenance|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
