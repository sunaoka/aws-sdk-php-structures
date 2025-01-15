<?php

namespace Sunaoka\Aws\Structures\Support\DescribeServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $serviceCodeList
 * @property string|null $language
 */
class DescribeServicesRequest extends Request
{
    /**
     * @param array{
     *     serviceCodeList?: list<string>|null,
     *     language?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
