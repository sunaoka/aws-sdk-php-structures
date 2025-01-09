<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteIntentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 */
class DeleteIntentVersionRequest extends Request
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
