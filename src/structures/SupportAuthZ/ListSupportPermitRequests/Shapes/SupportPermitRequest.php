<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListSupportPermitRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestArn
 * @property Permit $permit
 * @property string $supportCaseDisplayId
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class SupportPermitRequest extends Shape
{
    /**
     * @param array{
     *     requestArn: string,
     *     permit: Permit,
     *     supportCaseDisplayId: string,
     *     status: 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELLED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
