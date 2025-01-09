<?php

namespace Sunaoka\Aws\Structures\Iot\ListOutgoingCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $pageSize
 * @property string $marker
 * @property bool $ascendingOrder
 */
class ListOutgoingCertificatesRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int,
     *     marker?: string,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
