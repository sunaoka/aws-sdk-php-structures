<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationLogOutputUri
 * @property list<string>|null $ApplicationLogPaths
 * @property string|null $Description
 * @property string $Identifier
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationLogOutputUri?: string|null,
     *     ApplicationLogPaths?: list<string>|null,
     *     Description?: string|null,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
