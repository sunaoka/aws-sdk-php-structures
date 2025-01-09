<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeCondition $condition
 * @property DocumentAttributeTarget $target
 * @property 'DELETE' $documentContentOperator
 */
class InlineDocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     condition?: DocumentAttributeCondition,
     *     target?: DocumentAttributeTarget,
     *     documentContentOperator?: 'DELETE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
