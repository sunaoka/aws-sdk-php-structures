<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\PutLaunchProfileMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER' $persona
 * @property string $principalId
 */
class NewLaunchProfileMember extends Shape
{
    /**
     * @param array{
     *     persona: 'USER',
     *     principalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
