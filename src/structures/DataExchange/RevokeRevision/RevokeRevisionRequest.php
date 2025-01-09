<?php

namespace Sunaoka\Aws\Structures\DataExchange\RevokeRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $RevisionId
 * @property string $RevocationComment
 */
class RevokeRevisionRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     RevisionId: string,
     *     RevocationComment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
