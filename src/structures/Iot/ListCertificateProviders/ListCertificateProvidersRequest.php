<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificateProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property bool $ascendingOrder
 */
class ListCertificateProvidersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
