<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFeaturedResultsSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $FeaturedResultsSetId
 */
class DescribeFeaturedResultsSetRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     FeaturedResultsSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
