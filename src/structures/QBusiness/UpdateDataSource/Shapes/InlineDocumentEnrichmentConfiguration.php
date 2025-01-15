<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeCondition|null $condition
 * @property DocumentAttributeTarget|null $target
 * @property 'DELETE'|null $documentContentOperator
 */
class InlineDocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     condition?: DocumentAttributeCondition|null,
     *     target?: DocumentAttributeTarget|null,
     *     documentContentOperator?: 'DELETE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
