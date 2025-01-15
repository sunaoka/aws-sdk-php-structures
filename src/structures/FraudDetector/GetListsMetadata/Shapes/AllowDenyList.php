<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetListsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $variableType
 * @property string|null $createdTime
 * @property string|null $updatedTime
 * @property string|null $arn
 */
class AllowDenyList extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     variableType?: string|null,
     *     createdTime?: string|null,
     *     updatedTime?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
