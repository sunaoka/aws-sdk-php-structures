<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetListsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $variableType
 * @property string $createdTime
 * @property string $updatedTime
 * @property string $arn
 */
class AllowDenyList extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     variableType?: string,
     *     createdTime?: string,
     *     updatedTime?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
