<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateLibraryItemMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $libraryItemId
 * @property bool $isVerified
 */
class UpdateLibraryItemMetadataRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     libraryItemId: string,
     *     isVerified?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
