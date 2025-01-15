<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $eventArns
 * @property string|null $locale
 */
class DescribeEventDetailsRequest extends Request
{
    /**
     * @param array{
     *     eventArns: list<string>,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
