<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteEmailAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EmailAddressId
 */
class DeleteEmailAddressRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EmailAddressId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
