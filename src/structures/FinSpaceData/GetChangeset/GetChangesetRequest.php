<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetChangeset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $changesetId
 */
class GetChangesetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     changesetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
