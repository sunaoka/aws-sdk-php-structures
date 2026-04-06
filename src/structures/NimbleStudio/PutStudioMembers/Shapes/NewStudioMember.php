<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\PutStudioMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADMINISTRATOR' $persona
 * @property string $principalId
 */
class NewStudioMember extends Shape
{
    /**
     * @param array{
     *     persona: 'ADMINISTRATOR',
     *     principalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
