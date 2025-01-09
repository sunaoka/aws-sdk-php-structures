<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: array<string, list<string>>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
