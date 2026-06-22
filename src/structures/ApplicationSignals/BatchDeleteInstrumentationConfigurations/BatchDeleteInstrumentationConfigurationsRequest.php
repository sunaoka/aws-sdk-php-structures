<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BatchDeleteDeletionTarget $DeletionTarget
 */
class BatchDeleteInstrumentationConfigurationsRequest extends Request
{
    /**
     * @param array{DeletionTarget: Shapes\BatchDeleteDeletionTarget} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
