<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeDomainValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $ExactDomain
 * @property 'ENABLED'|'DISABLED'|null $Subdomains
 * @property 'ENABLED'|'DISABLED'|null $Wildcards
 */
class DomainScope extends Shape
{
    /**
     * @param array{
     *     ExactDomain?: 'ENABLED'|'DISABLED'|null,
     *     Subdomains?: 'ENABLED'|'DISABLED'|null,
     *     Wildcards?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
