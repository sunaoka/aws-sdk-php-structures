<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $referenceStoreId
 */
class DeleteReferenceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     referenceStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
