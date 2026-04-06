<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'pending'|'active'|'failed'|null $Status
 * @property int|null $NumberOfCaCertificates
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $Reason
 */
class TrustStore extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Status?: 'pending'|'active'|'failed'|null,
     *     NumberOfCaCertificates?: int|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
