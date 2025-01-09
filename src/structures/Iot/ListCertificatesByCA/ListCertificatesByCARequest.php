<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificatesByCA;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caCertificateId
 * @property int $pageSize
 * @property string $marker
 * @property bool $ascendingOrder
 */
class ListCertificatesByCARequest extends Request
{
    /**
     * @param array{
     *     caCertificateId: string,
     *     pageSize?: int,
     *     marker?: string,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
