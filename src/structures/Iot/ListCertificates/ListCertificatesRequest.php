<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250> $pageSize
 * @property string $marker
 * @property bool $ascendingOrder
 */
class ListCertificatesRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int<1, 250>,
     *     marker?: string,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
