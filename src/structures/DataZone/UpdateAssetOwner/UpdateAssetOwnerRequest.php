<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetOwner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $targetProjectIdentifier
 * @property string|null $clientToken
 */
class UpdateAssetOwnerRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     targetProjectIdentifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
