<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DisplayName
 * @property string|null $EmailAddress
 * @property string|null $ID
 * @property 'CanonicalUser'|'AmazonCustomerByEmail'|'Group' $Type
 * @property string|null $URI
 */
class Grantee extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string|null,
     *     EmailAddress?: string|null,
     *     ID?: string|null,
     *     Type: 'CanonicalUser'|'AmazonCustomerByEmail'|'Group',
     *     URI?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
