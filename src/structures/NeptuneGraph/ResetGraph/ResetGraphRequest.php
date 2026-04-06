<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ResetGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property bool $skipSnapshot
 */
class ResetGraphRequest extends Request
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
