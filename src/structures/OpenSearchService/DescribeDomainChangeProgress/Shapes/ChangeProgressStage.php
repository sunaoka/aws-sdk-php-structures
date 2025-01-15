<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Status
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 */
class ChangeProgressStage extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: string|null,
     *     Description?: string|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
