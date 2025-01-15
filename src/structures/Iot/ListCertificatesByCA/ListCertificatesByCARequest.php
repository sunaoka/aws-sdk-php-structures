<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificatesByCA;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caCertificateId
 * @property int<1, 250>|null $pageSize
 * @property string|null $marker
 * @property bool|null $ascendingOrder
 */
class ListCertificatesByCARequest extends Request
{
    /**
     * @param array{
     *     caCertificateId: string,
     *     pageSize?: int<1, 250>|null,
     *     marker?: string|null,
     *     ascendingOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
