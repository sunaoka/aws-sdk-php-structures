<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $eventArns
 * @property string $locale
 */
class DescribeEventDetailsRequest extends Request
{
    /**
     * @param array{
     *     eventArns: list<string>,
     *     locale?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
