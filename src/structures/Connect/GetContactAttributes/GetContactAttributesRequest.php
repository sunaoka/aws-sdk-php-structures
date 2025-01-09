<?php

namespace Sunaoka\Aws\Structures\Connect\GetContactAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $InitialContactId
 */
class GetContactAttributesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     InitialContactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
