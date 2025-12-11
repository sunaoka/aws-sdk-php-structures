<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListTrustStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'pending'|'active'|'failed' $Status
 * @property int $NumberOfCaCertificates
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $Reason
 * @property string $ETag
 */
class TrustStoreSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Arn: string,
     *     Name: string,
     *     Status: 'pending'|'active'|'failed',
     *     NumberOfCaCertificates: int,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     Reason?: string|null,
     *     ETag: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
