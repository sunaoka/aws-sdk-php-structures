<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property DocumentAttributeValue|null $value
 * @property 'DELETE'|null $attributeValueOperator
 */
class DocumentAttributeTarget extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value?: DocumentAttributeValue|null,
     *     attributeValueOperator?: 'DELETE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
