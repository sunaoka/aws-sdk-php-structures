<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PutRepositoryTriggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $destinationArn
 * @property string|null $customData
 * @property list<string>|null $branches
 * @property list<'all'|'updateReference'|'createReference'|'deleteReference'> $events
 */
class RepositoryTrigger extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     destinationArn: string,
     *     customData?: string|null,
     *     branches?: list<string>|null,
     *     events: list<'all'|'updateReference'|'createReference'|'deleteReference'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
