<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Type
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property Owner $Owner
 * @property list<Tag> $Tags
 * @property DefaultServerSideEncryption $DefaultServerSideEncryption
 * @property PublicAccess $PublicAccess
 * @property list<S3ObjectDetail> $S3ObjectDetails
 */
class S3BucketDetail extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     Type?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Owner?: Owner,
     *     Tags?: list<Tag>,
     *     DefaultServerSideEncryption?: DefaultServerSideEncryption,
     *     PublicAccess?: PublicAccess,
     *     S3ObjectDetails?: list<S3ObjectDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
