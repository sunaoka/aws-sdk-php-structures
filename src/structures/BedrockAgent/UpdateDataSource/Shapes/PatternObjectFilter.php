<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $objectType
 * @property list<string>|null $inclusionFilters
 * @property list<string>|null $exclusionFilters
 */
class PatternObjectFilter extends Shape
{
    /**
     * @param array{
     *     objectType: string,
     *     inclusionFilters?: list<string>|null,
     *     exclusionFilters?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
