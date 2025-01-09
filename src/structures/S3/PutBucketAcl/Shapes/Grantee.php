<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DisplayName
 * @property string $EmailAddress
 * @property string $ID
 * @property 'CanonicalUser'|'AmazonCustomerByEmail'|'Group' $Type
 * @property string $URI
 */
class Grantee extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string,
     *     EmailAddress?: string,
     *     ID?: string,
     *     Type: 'CanonicalUser'|'AmazonCustomerByEmail'|'Group',
     *     URI?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
