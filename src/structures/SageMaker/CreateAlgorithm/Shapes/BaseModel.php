<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HubContentName
 * @property string|null $HubContentVersion
 * @property string|null $RecipeName
 */
class BaseModel extends Shape
{
    /**
     * @param array{
     *     HubContentName?: string|null,
     *     HubContentVersion?: string|null,
     *     RecipeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
