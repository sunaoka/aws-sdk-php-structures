<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeCondition $Condition
 * @property DocumentAttributeTarget $Target
 * @property bool $DocumentContentDeletion
 */
class InlineCustomDocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     Condition?: DocumentAttributeCondition,
     *     Target?: DocumentAttributeTarget,
     *     DocumentContentDeletion?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
