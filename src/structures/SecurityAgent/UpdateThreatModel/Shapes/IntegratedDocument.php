<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreatModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $resourceId
 */
class IntegratedDocument extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     resourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
