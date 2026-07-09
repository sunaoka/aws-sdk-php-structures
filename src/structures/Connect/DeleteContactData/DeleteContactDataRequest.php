<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property list<'CUSTOMER_ENDPOINT'|'ADDITIONAL_EMAIL_RECIPIENTS'|'EMAIL_SUBJECT'> $ContactFields
 */
class DeleteContactDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     ContactFields: list<'CUSTOMER_ENDPOINT'|'ADDITIONAL_EMAIL_RECIPIENTS'|'EMAIL_SUBJECT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
