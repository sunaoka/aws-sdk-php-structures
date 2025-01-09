<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $RevisionId
 */
class DeleteRevisionRequest extends Request
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
