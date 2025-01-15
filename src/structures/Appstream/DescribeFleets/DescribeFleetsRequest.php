<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property string|null $NextToken
 */
class DescribeFleetsRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
