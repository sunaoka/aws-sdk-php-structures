<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteBotRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
