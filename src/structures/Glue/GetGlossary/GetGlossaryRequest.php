<?php

namespace Sunaoka\Aws\Structures\Glue\GetGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetGlossaryRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
