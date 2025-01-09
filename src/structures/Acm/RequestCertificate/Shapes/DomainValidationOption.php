<?php

namespace Sunaoka\Aws\Structures\Acm\RequestCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $ValidationDomain
 */
class DomainValidationOption extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     ValidationDomain: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
