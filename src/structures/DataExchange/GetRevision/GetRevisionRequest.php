<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $RevisionId
 */
class GetRevisionRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
