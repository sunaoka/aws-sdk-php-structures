<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAccountAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AttributeNames
 */
class DescribeAccountAttributesRequest extends Request
{
    /**
     * @param array{AttributeNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
