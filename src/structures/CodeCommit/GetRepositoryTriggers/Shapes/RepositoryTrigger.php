<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetRepositoryTriggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $destinationArn
 * @property string $customData
 * @property list<string> $branches
 * @property list<'all'|'updateReference'|'createReference'|'deleteReference'> $events
 */
class RepositoryTrigger extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     destinationArn: string,
     *     customData?: string,
     *     branches?: list<string>,
     *     events: list<'all'|'updateReference'|'createReference'|'deleteReference'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
