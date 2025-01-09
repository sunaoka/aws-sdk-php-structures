<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetActivationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $clientToken
 * @property list<Shapes\StartReadSetActivationJobSourceItem> $sources
 */
class StartReadSetActivationJobRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     clientToken?: string,
     *     sources: list<Shapes\StartReadSetActivationJobSourceItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
