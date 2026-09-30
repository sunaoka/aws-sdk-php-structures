<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Message
 * @property 'Critical'|'Warning'|null $Severity
 */
class ValidationFailure extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Message?: string|null,
     *     Severity?: 'Critical'|'Warning'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
