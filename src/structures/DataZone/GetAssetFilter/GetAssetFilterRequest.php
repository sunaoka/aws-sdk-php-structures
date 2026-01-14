<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $assetIdentifier
 * @property string $identifier
 */
class GetAssetFilterRequest extends Request
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
