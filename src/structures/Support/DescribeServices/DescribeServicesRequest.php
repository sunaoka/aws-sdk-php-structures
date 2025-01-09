<?php

namespace Sunaoka\Aws\Structures\Support\DescribeServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $serviceCodeList
 * @property string $language
 */
class DescribeServicesRequest extends Request
{
    /**
     * @param array{
     *     serviceCodeList?: list<string>,
     *     language?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
