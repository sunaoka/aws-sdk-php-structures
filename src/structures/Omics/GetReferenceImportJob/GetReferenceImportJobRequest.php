<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $referenceStoreId
 */
class GetReferenceImportJobRequest extends Request
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
