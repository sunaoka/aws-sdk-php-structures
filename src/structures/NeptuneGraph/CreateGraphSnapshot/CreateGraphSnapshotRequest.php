<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraphSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $snapshotName
 * @property array<string, string>|null $tags
 */
class CreateGraphSnapshotRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     snapshotName: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
