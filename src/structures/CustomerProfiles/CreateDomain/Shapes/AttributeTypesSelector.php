<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY' $AttributeMatchingModel
 * @property list<string>|null $Address
 * @property list<string>|null $PhoneNumber
 * @property list<string>|null $EmailAddress
 */
class AttributeTypesSelector extends Shape
{
    /**
     * @param array{
     *     AttributeMatchingModel: 'ONE_TO_ONE'|'MANY_TO_MANY',
     *     Address?: list<string>|null,
     *     PhoneNumber?: list<string>|null,
     *     EmailAddress?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
