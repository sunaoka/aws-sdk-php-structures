<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificateProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property bool|null $ascendingOrder
 */
class ListCertificateProvidersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     ascendingOrder?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
