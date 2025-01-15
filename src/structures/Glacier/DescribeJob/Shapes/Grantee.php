<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AmazonCustomerByEmail'|'CanonicalUser'|'Group' $Type
 * @property string|null $DisplayName
 * @property string|null $URI
 * @property string|null $ID
 * @property string|null $EmailAddress
 */
class Grantee extends Shape
{
    /**
     * @param array{
     *     Type: 'AmazonCustomerByEmail'|'CanonicalUser'|'Group',
     *     DisplayName?: string|null,
     *     URI?: string|null,
     *     ID?: string|null,
     *     EmailAddress?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
