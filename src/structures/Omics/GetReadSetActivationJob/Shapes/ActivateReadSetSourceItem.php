<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetActivationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $readSetId
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED' $status
 * @property string|null $statusMessage
 */
class ActivateReadSetSourceItem extends Shape
{
    /**
     * @param array{
     *     readSetId: string,
     *     status: 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED',
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
