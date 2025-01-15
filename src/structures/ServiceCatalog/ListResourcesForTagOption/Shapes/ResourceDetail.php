<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListResourcesForTagOption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ARN
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class ResourceDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ARN?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
