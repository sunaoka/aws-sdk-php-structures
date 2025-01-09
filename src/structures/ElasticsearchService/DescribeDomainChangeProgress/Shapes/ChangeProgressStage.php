<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastUpdated
 */
class ChangeProgressStage extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: string,
     *     Description?: string,
     *     LastUpdated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
