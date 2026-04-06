<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repoName
 * @property string $repoId
 * @property string $owner
 * @property 'organization'|'user' $ownerType
 * @property string|null $instanceIdentifier
 */
class GitHubConfiguration extends Shape
{
    /**
     * @param array{
     *     repoName: string,
     *     repoId: string,
     *     owner: string,
     *     ownerType: 'organization'|'user',
     *     instanceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
