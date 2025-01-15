<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $StreamEnabled
 * @property string|null $StreamViewType
 */
class AwsDynamoDbTableStreamSpecification extends Shape
{
    /**
     * @param array{
     *     StreamEnabled?: bool|null,
     *     StreamViewType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
