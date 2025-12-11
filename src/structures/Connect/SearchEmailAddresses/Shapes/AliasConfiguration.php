<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddressId
 */
class AliasConfiguration extends Shape
{
    /**
     * @param array{EmailAddressId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
