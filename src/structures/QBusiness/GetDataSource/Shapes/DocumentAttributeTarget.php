<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property DocumentAttributeValue $value
 * @property 'DELETE' $attributeValueOperator
 */
class DocumentAttributeTarget extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value?: DocumentAttributeValue,
     *     attributeValueOperator?: 'DELETE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
