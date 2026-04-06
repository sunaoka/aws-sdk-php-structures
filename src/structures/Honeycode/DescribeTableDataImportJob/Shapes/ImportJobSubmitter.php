<?php

namespace Sunaoka\Aws\Structures\Honeycode\DescribeTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $email
 * @property string|null $userArn
 */
class ImportJobSubmitter extends Shape
{
    /**
     * @param array{
     *     email?: string|null,
     *     userArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
