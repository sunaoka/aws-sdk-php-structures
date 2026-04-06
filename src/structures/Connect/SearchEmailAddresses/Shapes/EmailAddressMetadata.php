<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EmailAddressId
 * @property string|null $EmailAddressArn
 * @property string|null $EmailAddress
 * @property string|null $Description
 * @property string|null $DisplayName
 */
class EmailAddressMetadata extends Shape
{
    /**
     * @param array{
     *     EmailAddressId?: string|null,
     *     EmailAddressArn?: string|null,
     *     EmailAddress?: string|null,
     *     Description?: string|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
