<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListResourcesForTagOption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class ResourceDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ARN?: string,
     *     Name?: string,
     *     Description?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
