<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListCertificateAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string|null $nextToken
 * @property int<1, 10>|null $maxResults
 */
class ListCertificateAssociationsRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
