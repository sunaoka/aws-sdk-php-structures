<?php

namespace Sunaoka\Aws\Structures\Iot\ListCACertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250>|null $pageSize
 * @property string|null $marker
 * @property bool|null $ascendingOrder
 * @property string|null $templateName
 */
class ListCACertificatesRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int<1, 250>|null,
     *     marker?: string|null,
     *     ascendingOrder?: bool|null,
     *     templateName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
