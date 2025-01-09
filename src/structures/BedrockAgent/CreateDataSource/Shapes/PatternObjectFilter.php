<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $exclusionFilters
 * @property list<string> $inclusionFilters
 * @property string $objectType
 */
class PatternObjectFilter extends Shape
{
    /**
     * @param array{
     *     exclusionFilters?: list<string>,
     *     inclusionFilters?: list<string>,
     *     objectType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
