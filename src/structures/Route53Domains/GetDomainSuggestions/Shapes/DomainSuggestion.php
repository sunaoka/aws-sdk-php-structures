<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $Availability
 */
class DomainSuggestion extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     Availability?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
