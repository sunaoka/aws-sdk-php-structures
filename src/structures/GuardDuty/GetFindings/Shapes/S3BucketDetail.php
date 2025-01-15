<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property Owner|null $Owner
 * @property list<Tag>|null $Tags
 * @property DefaultServerSideEncryption|null $DefaultServerSideEncryption
 * @property PublicAccess|null $PublicAccess
 * @property list<S3ObjectDetail>|null $S3ObjectDetails
 */
class S3BucketDetail extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Owner?: Owner|null,
     *     Tags?: list<Tag>|null,
     *     DefaultServerSideEncryption?: DefaultServerSideEncryption|null,
     *     PublicAccess?: PublicAccess|null,
     *     S3ObjectDetails?: list<S3ObjectDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
