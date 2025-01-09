<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryStatement
 * @property string $DeliveryS3Uri
 * @property string $QueryAlias
 * @property list<string> $QueryParameters
 * @property string $EventDataStoreOwnerAccountId
 */
class StartQueryRequest extends Request
{
    /**
     * @param array{
     *     QueryStatement?: string,
     *     DeliveryS3Uri?: string,
     *     QueryAlias?: string,
     *     QueryParameters?: list<string>,
     *     EventDataStoreOwnerAccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
