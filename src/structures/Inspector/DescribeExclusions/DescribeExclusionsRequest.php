<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeExclusions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $exclusionArns
 * @property 'EN_US'|null $locale
 */
class DescribeExclusionsRequest extends Request
{
    /**
     * @param array{
     *     exclusionArns: list<string>,
     *     locale?: 'EN_US'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
