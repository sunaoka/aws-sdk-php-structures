<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinIntent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $signature
 */
class GetBuiltinIntentRequest extends Request
{
    /**
     * @param array{signature: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
