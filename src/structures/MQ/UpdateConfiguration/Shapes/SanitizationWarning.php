<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property string|null $ElementName
 * @property 'DISALLOWED_ELEMENT_REMOVED'|'DISALLOWED_ATTRIBUTE_REMOVED'|'INVALID_ATTRIBUTE_VALUE_REMOVED' $Reason
 */
class SanitizationWarning extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     ElementName?: string|null,
     *     Reason: 'DISALLOWED_ELEMENT_REMOVED'|'DISALLOWED_ATTRIBUTE_REMOVED'|'INVALID_ATTRIBUTE_VALUE_REMOVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
