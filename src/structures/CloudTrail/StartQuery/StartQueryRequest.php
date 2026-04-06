<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $QueryStatement
 * @property string|null $DeliveryS3Uri
 * @property string|null $QueryAlias
 * @property list<string>|null $QueryParameters
 * @property string|null $EventDataStoreOwnerAccountId
 */
class StartQueryRequest extends Request
{
    /**
     * @param array{
     *     QueryStatement?: string|null,
     *     DeliveryS3Uri?: string|null,
     *     QueryAlias?: string|null,
     *     QueryParameters?: list<string>|null,
     *     EventDataStoreOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
