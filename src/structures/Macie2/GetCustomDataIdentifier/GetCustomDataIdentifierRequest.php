<?php

namespace Sunaoka\Aws\Structures\Macie2\GetCustomDataIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetCustomDataIdentifierRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
