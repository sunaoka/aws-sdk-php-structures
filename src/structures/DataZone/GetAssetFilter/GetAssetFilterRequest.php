<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property string $domainIdentifier
 * @property string $identifier
 */
class GetAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     domainIdentifier: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
