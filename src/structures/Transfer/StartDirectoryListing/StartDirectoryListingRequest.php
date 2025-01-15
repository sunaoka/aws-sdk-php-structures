<?php

namespace Sunaoka\Aws\Structures\Transfer\StartDirectoryListing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $RemoteDirectoryPath
 * @property int<1, 10000>|null $MaxItems
 * @property string $OutputDirectoryPath
 */
class StartDirectoryListingRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     RemoteDirectoryPath: string,
     *     MaxItems?: int<1, 10000>|null,
     *     OutputDirectoryPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
