<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteIntent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteIntentRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
