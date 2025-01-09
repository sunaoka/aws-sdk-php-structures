<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
