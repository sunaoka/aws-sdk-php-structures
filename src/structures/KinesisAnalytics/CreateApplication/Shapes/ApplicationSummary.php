<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $ApplicationARN
 * @property 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING' $ApplicationStatus
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationARN: string,
     *     ApplicationStatus: 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
