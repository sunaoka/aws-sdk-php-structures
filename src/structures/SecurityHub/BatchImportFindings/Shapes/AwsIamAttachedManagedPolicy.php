<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property string $PolicyArn
 */
class AwsIamAttachedManagedPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     PolicyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
