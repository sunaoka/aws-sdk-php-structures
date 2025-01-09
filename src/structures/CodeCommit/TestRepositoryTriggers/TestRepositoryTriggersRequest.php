<?php

namespace Sunaoka\Aws\Structures\CodeCommit\TestRepositoryTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property list<Shapes\RepositoryTrigger> $triggers
 */
class TestRepositoryTriggersRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     triggers: list<Shapes\RepositoryTrigger>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
