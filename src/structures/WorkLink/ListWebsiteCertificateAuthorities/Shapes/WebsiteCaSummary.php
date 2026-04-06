<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListWebsiteCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WebsiteCaId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $DisplayName
 */
class WebsiteCaSummary extends Shape
{
    /**
     * @param array{
     *     WebsiteCaId?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
