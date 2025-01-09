<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificatesByCA;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caCertificateId
 * @property int<1, 250> $pageSize
 * @property string $marker
 * @property bool $ascendingOrder
 */
class ListCertificatesByCARequest extends Request
{
    /**
     * @param array{
     *     caCertificateId: string,
     *     pageSize?: int<1, 250>,
     *     marker?: string,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
