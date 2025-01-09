<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteBotVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 */
class DeleteBotVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
