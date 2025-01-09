<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListApplicationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $applicationVersion
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'Creating'|'Available'|'Failed' $status
 * @property string $statusReason
 */
class ApplicationVersionSummary extends Shape
{
    /**
     * @param array{
     *     applicationVersion: int<1, max>,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     status: 'Creating'|'Available'|'Failed',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
