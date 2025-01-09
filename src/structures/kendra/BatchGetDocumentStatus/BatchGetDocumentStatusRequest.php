<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property list<Shapes\DocumentInfo> $DocumentInfoList
 */
class BatchGetDocumentStatusRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DocumentInfoList: list<Shapes\DocumentInfo>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
