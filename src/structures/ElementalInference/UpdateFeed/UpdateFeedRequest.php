<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $id
 * @property list<Shapes\UpdateOutput> $outputs
 */
class UpdateFeedRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     id: string,
     *     outputs: list<Shapes\UpdateOutput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
