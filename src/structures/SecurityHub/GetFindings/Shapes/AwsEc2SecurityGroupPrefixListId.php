<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrefixListId
 */
class AwsEc2SecurityGroupPrefixListId extends Shape
{
    /**
     * @param array{PrefixListId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
