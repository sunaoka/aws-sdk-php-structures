<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RedirectFrom
 * @property string|null $RedirectTo
 */
class HttpRedirect extends Shape
{
    /**
     * @param array{
     *     RedirectFrom?: string|null,
     *     RedirectTo?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
