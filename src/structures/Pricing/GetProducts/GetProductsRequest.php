<?php

namespace Sunaoka\Aws\Structures\Pricing\GetProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property list<Shapes\Filter> $Filters
 * @property string $FormatVersion
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetProductsRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     Filters?: list<Shapes\Filter>,
     *     FormatVersion?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
