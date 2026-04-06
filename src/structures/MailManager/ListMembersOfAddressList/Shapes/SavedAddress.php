<?php

namespace Sunaoka\Aws\Structures\MailManager\ListMembersOfAddressList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class SavedAddress extends Shape
{
    /**
     * @param array{
     *     Address: string,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
