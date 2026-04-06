<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property list<string>|null $Sections
 * @property string $SnapshotId
 */
class GetSnapshotRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     Sections?: list<string>|null,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
