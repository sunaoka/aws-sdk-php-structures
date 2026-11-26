<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListCertificateAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListCertificateAssociationsRequest extends Request
{
    /**
     * @param array{
     *     proxyIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
