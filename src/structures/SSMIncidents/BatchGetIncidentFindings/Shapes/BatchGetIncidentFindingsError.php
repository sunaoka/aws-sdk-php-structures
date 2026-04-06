<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $findingId
 * @property string $message
 */
class BatchGetIncidentFindingsError extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     findingId: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
