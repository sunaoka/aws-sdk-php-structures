<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commandId
 * @property string|null $displayName
 * @property string|null $description
 * @property bool|null $deprecated
 */
class UpdateCommandRequest extends Request
{
    /**
     * @param array{
     *     commandId: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     deprecated?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
