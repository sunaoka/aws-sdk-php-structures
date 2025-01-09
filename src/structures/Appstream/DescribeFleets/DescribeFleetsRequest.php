<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property string $NextToken
 */
class DescribeFleetsRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
