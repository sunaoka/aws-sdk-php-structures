<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreatePullRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $sourceReference
 * @property string|null $destinationReference
 */
class Target extends Shape
{
    /**
     * @param array{
     *     repositoryName: string,
     *     sourceReference: string,
     *     destinationReference?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
