<?php

namespace Sunaoka\Aws\Structures\Ssm\ValidateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'azure:tenant'|'azure:subscription'|null $Type
 * @property string|null $Id
 */
class ValidationFindingScope extends Shape
{
    /**
     * @param array{
     *     Type?: 'azure:tenant'|'azure:subscription'|null,
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
