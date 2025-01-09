<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $id
 */
class GetReadSetExportJobRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
