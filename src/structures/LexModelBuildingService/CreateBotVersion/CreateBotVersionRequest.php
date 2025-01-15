<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateBotVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $checksum
 */
class CreateBotVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     checksum?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
