<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY' $AttributeMatchingModel
 * @property list<string> $Address
 * @property list<string> $PhoneNumber
 * @property list<string> $EmailAddress
 */
class AttributeTypesSelector extends Shape
{
    /**
     * @param array{
     *     AttributeMatchingModel: 'ONE_TO_ONE'|'MANY_TO_MANY',
     *     Address?: list<string>,
     *     PhoneNumber?: list<string>,
     *     EmailAddress?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
