<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: array<string, list<string>>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
