<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $assetIdentifier
 * @property string $identifier
 */
class DeleteAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     assetIdentifier: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
