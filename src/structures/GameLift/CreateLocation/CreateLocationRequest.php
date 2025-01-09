<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationName
 * @property list<Shapes\Tag> $Tags
 */
class CreateLocationRequest extends Request
{
    /**
     * @param array{
     *     LocationName: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
