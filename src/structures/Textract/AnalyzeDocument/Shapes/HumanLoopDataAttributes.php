<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'FreeOfPersonallyIdentifiableInformation'|'FreeOfAdultContent'>|null $ContentClassifiers
 */
class HumanLoopDataAttributes extends Shape
{
    /**
     * @param array{ContentClassifiers?: list<'FreeOfPersonallyIdentifiableInformation'|'FreeOfAdultContent'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
