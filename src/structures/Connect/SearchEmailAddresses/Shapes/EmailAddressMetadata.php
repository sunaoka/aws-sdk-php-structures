<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddressId
 * @property string $EmailAddressArn
 * @property string $EmailAddress
 * @property string $Description
 * @property string $DisplayName
 */
class EmailAddressMetadata extends Shape
{
    /**
     * @param array{
     *     EmailAddressId?: string,
     *     EmailAddressArn?: string,
     *     EmailAddress?: string,
     *     Description?: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
