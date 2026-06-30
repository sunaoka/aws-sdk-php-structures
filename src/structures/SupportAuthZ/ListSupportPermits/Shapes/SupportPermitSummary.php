<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListSupportPermits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property Permit $permit
 * @property 'ACTIVE'|'INACTIVE'|'DELETING' $status
 * @property SigningKeyInfo $signingKeyInfo
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $supportCaseDisplayId
 */
class SupportPermitSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     arn: string,
     *     permit: Permit,
     *     status: 'ACTIVE'|'INACTIVE'|'DELETING',
     *     signingKeyInfo: SigningKeyInfo,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     supportCaseDisplayId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
