<?php

namespace Sunaoka\Aws\Structures\Pricing\GetProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $FormatVersion
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetProductsRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     FormatVersion?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
