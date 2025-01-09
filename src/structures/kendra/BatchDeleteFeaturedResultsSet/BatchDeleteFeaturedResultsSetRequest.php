<?php

namespace Sunaoka\Aws\Structures\kendra\BatchDeleteFeaturedResultsSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property list<string> $FeaturedResultsSetIds
 */
class BatchDeleteFeaturedResultsSetRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     FeaturedResultsSetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
