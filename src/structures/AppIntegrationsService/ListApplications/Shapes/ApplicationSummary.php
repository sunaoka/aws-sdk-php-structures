<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $Namespace
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Name?: string,
     *     Namespace?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
