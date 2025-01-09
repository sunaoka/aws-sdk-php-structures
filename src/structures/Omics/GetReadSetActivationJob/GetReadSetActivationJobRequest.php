<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetActivationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $sequenceStoreId
 */
class GetReadSetActivationJobRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     sequenceStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
