<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $exclusionFilters
 * @property list<string>|null $inclusionFilters
 * @property string $objectType
 */
class PatternObjectFilter extends Shape
{
    /**
     * @param array{
     *     exclusionFilters?: list<string>|null,
     *     inclusionFilters?: list<string>|null,
     *     objectType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
