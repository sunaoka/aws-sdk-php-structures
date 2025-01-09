<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperienceEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $GroupName
 * @property string $IdentifiedUserName
 * @property string $FirstName
 * @property string $LastName
 */
class EntityDisplayData extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     GroupName?: string,
     *     IdentifiedUserName?: string,
     *     FirstName?: string,
     *     LastName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
