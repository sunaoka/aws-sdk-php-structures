<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateIntentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $checksum
 */
class CreateIntentVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     checksum?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
