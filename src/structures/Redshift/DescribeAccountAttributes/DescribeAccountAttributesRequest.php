<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAccountAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AttributeNames
 */
class DescribeAccountAttributesRequest extends Request
{
    /**
     * @param array{AttributeNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
