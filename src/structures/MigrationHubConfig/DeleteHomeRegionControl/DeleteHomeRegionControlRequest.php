<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\DeleteHomeRegionControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlId
 */
class DeleteHomeRegionControlRequest extends Request
{
    /**
     * @param array{ControlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
