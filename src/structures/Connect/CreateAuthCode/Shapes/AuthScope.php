<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAuthCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SecurityProfileIds
 * @property 'CUSTOMER_PROFILE' $EntityType
 * @property string|null $EntityId
 * @property string|null $DomainName
 */
class AuthScope extends Shape
{
    /**
     * @param array{
     *     SecurityProfileIds?: list<string>|null,
     *     EntityType: 'CUSTOMER_PROFILE',
     *     EntityId?: string|null,
     *     DomainName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
