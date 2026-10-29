<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CompareDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property string|null $SourceValue
 * @property string|null $TargetValue
 * @property 'redacted'|null $Policy
 */
class DivergentField extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     SourceValue?: string|null,
     *     TargetValue?: string|null,
     *     Policy?: 'redacted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
