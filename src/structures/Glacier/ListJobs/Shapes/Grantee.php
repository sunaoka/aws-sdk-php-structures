<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AmazonCustomerByEmail'|'CanonicalUser'|'Group' $Type
 * @property string $DisplayName
 * @property string $URI
 * @property string $ID
 * @property string $EmailAddress
 */
class Grantee extends Shape
{
    /**
     * @param array{
     *     Type: 'AmazonCustomerByEmail'|'CanonicalUser'|'Group',
     *     DisplayName?: string,
     *     URI?: string,
     *     ID?: string,
     *     EmailAddress?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
