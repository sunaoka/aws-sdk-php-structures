<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListTagOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListTagOptionsFilters $Filters
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 */
class ListTagOptionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ListTagOptionsFilters,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
