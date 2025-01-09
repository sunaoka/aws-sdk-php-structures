<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $roleArn
 * @property string $clientToken
 * @property list<Shapes\StartReadSetImportJobSourceItem> $sources
 */
class StartReadSetImportJobRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     roleArn: string,
     *     clientToken?: string,
     *     sources: list<Shapes\StartReadSetImportJobSourceItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
