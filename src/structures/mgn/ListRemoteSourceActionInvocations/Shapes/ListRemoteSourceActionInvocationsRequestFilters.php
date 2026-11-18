<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sourceServerArns
 * @property list<string>|null $remoteSourceActionArns
 * @property list<'PENDING'|'IN_PROGRESS'|'DELAYED'|'SUCCESS'|'CANCELLED'|'TIMED_OUT'|'FAILED'|'CANCELLING'|'STALLED'>|null $statuses
 */
class ListRemoteSourceActionInvocationsRequestFilters extends Shape
{
    /**
     * @param array{
     *     sourceServerArns?: list<string>|null,
     *     remoteSourceActionArns?: list<string>|null,
     *     statuses?: list<'PENDING'|'IN_PROGRESS'|'DELAYED'|'SUCCESS'|'CANCELLED'|'TIMED_OUT'|'FAILED'|'CANCELLING'|'STALLED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
