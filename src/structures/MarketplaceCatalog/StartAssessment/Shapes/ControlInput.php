<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlId
 * @property JsonDocumentType|null $Input
 */
class ControlInput extends Shape
{
    /**
     * @param array{
     *     ControlId: string,
     *     Input?: JsonDocumentType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
