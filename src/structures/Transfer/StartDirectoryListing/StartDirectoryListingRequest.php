<?php

namespace Sunaoka\Aws\Structures\Transfer\StartDirectoryListing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $RemoteDirectoryPath
 * @property int $MaxItems
 * @property string $OutputDirectoryPath
 */
class StartDirectoryListingRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     RemoteDirectoryPath: string,
     *     MaxItems?: int,
     *     OutputDirectoryPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
