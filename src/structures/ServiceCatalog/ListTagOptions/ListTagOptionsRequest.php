<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListTagOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListTagOptionsFilters|null $Filters
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListTagOptionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ListTagOptionsFilters|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
