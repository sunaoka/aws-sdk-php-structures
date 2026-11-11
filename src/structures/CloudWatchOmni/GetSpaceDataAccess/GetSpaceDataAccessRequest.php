<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpaceDataAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property list<Shapes\DataAccessTarget> $targetScopes
 * @property int<900, 3600>|null $durationSeconds
 * @property array<string, string>|null $auditContext
 */
class GetSpaceDataAccessRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     targetScopes: list<Shapes\DataAccessTarget>,
     *     durationSeconds?: int<900, 3600>|null,
     *     auditContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
