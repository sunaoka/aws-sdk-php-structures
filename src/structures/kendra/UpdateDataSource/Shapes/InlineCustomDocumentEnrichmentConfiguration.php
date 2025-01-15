<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeCondition|null $Condition
 * @property DocumentAttributeTarget|null $Target
 * @property bool|null $DocumentContentDeletion
 */
class InlineCustomDocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     Condition?: DocumentAttributeCondition|null,
     *     Target?: DocumentAttributeTarget|null,
     *     DocumentContentDeletion?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
