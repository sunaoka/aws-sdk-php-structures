<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeleteGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property bool $skipSnapshot
 */
class DeleteGraphRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     skipSnapshot: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
