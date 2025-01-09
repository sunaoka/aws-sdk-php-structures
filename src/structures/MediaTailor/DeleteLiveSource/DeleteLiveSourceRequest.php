<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteLiveSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LiveSourceName
 * @property string $SourceLocationName
 */
class DeleteLiveSourceRequest extends Request
{
    /**
     * @param array{
     *     LiveSourceName: string,
     *     SourceLocationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
