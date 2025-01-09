<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteBlueprintRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
