<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Description
 * @property list<string>|null $ApplicationLogPaths
 * @property string|null $ApplicationLogOutputUri
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Description?: string|null,
     *     ApplicationLogPaths?: list<string>|null,
     *     ApplicationLogOutputUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
