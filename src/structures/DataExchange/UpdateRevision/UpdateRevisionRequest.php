<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Comment
 * @property string $DataSetId
 * @property bool $Finalized
 * @property string $RevisionId
 */
class UpdateRevisionRequest extends Request
{
    /**
     * @param array{
     *     Comment?: string,
     *     DataSetId: string,
     *     Finalized?: bool,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
