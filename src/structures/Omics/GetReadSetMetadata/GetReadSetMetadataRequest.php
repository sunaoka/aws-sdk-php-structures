<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $sequenceStoreId
 */
class GetReadSetMetadataRequest extends Request
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
