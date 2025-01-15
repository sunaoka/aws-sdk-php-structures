<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $Availability
 */
class DomainSuggestion extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     Availability?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
