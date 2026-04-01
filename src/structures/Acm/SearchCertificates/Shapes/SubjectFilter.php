<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommonNameFilter|null $CommonName
 */
class SubjectFilter extends Shape
{
    /**
     * @param array{CommonName?: CommonNameFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
