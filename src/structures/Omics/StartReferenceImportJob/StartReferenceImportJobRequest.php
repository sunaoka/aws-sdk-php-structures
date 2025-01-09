<?php

namespace Sunaoka\Aws\Structures\Omics\StartReferenceImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $referenceStoreId
 * @property string $roleArn
 * @property string $clientToken
 * @property list<Shapes\StartReferenceImportJobSourceItem> $sources
 */
class StartReferenceImportJobRequest extends Request
{
    /**
     * @param array{
     *     referenceStoreId: string,
     *     roleArn: string,
     *     clientToken?: string,
     *     sources: list<Shapes\StartReferenceImportJobSourceItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
