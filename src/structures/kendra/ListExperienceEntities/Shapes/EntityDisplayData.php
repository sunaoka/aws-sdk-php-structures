<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperienceEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property string|null $GroupName
 * @property string|null $IdentifiedUserName
 * @property string|null $FirstName
 * @property string|null $LastName
 */
class EntityDisplayData extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     GroupName?: string|null,
     *     IdentifiedUserName?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
