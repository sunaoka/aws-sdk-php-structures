<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_SCHEDULED'|'DISABLED_AND_ROLLBACK_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_COMPLETE'|'DISABLED_AND_ROLLBACK_ERROR'|'ERROR' $State
 * @property string $ErrorMessage
 */
class AutoTuneOptionsOutput extends Shape
{
    /**
     * @param array{
     *     State?: 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_SCHEDULED'|'DISABLED_AND_ROLLBACK_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_COMPLETE'|'DISABLED_AND_ROLLBACK_ERROR'|'ERROR',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
