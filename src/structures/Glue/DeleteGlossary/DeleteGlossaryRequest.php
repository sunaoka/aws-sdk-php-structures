<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteGlossaryRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
