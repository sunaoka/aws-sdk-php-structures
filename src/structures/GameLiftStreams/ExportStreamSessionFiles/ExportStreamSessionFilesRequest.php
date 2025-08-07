<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ExportStreamSessionFiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $StreamSessionIdentifier
 * @property string $OutputUri
 */
class ExportStreamSessionFilesRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     StreamSessionIdentifier: string,
     *     OutputUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
