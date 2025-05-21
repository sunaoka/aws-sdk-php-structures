<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ExportStreamSessionFiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $OutputUri
 * @property string $StreamSessionIdentifier
 */
class ExportStreamSessionFilesRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     OutputUri: string,
     *     StreamSessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
