<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Comment
 * @property string $DataSetId
 * @property bool|null $Finalized
 * @property string $RevisionId
 */
class UpdateRevisionRequest extends Request
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     DataSetId: string,
     *     Finalized?: bool|null,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
