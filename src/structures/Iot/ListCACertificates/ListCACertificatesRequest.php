<?php

namespace Sunaoka\Aws\Structures\Iot\ListCACertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $pageSize
 * @property string $marker
 * @property bool $ascendingOrder
 * @property string $templateName
 */
class ListCACertificatesRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int,
     *     marker?: string,
     *     ascendingOrder?: bool,
     *     templateName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
