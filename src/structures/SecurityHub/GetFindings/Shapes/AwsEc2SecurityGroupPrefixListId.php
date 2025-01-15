<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrefixListId
 */
class AwsEc2SecurityGroupPrefixListId extends Shape
{
    /**
     * @param array{PrefixListId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
