<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EntityId
 */
class DescribeEntityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EntityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
