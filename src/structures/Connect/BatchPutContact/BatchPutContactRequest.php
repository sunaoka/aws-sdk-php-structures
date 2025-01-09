<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $InstanceId
 * @property list<Shapes\ContactDataRequest> $ContactDataRequestList
 */
class BatchPutContactRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     InstanceId: string,
     *     ContactDataRequestList: list<Shapes\ContactDataRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
