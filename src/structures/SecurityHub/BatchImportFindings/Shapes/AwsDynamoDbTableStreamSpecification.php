<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $StreamEnabled
 * @property string $StreamViewType
 */
class AwsDynamoDbTableStreamSpecification extends Shape
{
    /**
     * @param array{
     *     StreamEnabled?: bool,
     *     StreamViewType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
