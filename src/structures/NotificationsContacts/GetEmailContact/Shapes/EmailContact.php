<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\GetEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $address
 * @property 'inactive'|'active' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class EmailContact extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     address: string,
     *     status: 'inactive'|'active',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
