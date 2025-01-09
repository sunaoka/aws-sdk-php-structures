<?php

namespace Sunaoka\Aws\Structures\Transfer\ListFileTransferResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilePath
 * @property 'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $StatusCode
 * @property string $FailureCode
 * @property string $FailureMessage
 */
class ConnectorFileTransferResult extends Shape
{
    /**
     * @param array{
     *     FilePath: string,
     *     StatusCode: 'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     FailureCode?: string,
     *     FailureMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
