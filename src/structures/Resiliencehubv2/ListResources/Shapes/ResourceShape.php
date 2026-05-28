<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string|null $awsRegion
 * @property string|null $awsAccountId
 * @property string|null $resourceType
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     awsRegion?: string|null,
     *     awsAccountId?: string|null,
     *     resourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
