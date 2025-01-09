<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ChangeSetId
 */
class DescribeChangeSetRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ChangeSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
