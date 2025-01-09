<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 */
class AwsIamRolePolicy extends Shape
{
    /**
     * @param array{PolicyName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
