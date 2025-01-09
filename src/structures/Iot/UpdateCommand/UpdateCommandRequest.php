<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commandId
 * @property string $displayName
 * @property string $description
 * @property bool $deprecated
 */
class UpdateCommandRequest extends Request
{
    /**
     * @param array{
     *     commandId: string,
     *     displayName?: string,
     *     description?: string,
     *     deprecated?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
