<?php

namespace Sunaoka\Aws\Structures\AppRegistry\DeleteApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
