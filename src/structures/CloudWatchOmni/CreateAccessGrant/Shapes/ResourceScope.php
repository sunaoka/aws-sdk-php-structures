<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property list<string>|null $resourceArns
 * @property array<string, string>|null $tags
 * @property list<'LOGS'|'TRACES'>|null $signalTypes
 * @property list<list<RowScope>>|null $rowScopeGroups
 */
class ResourceScope extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resourceArns?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     signalTypes?: list<'LOGS'|'TRACES'>|null,
     *     rowScopeGroups?: list<list<RowScope>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
