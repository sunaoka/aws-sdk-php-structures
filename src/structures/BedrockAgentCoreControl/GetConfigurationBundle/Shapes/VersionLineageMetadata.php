<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConfigurationBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $parentVersionIds
 * @property string|null $branchName
 * @property VersionCreatedBySource|null $createdBy
 * @property string|null $commitMessage
 */
class VersionLineageMetadata extends Shape
{
    /**
     * @param array{
     *     parentVersionIds?: list<string>|null,
     *     branchName?: string|null,
     *     createdBy?: VersionCreatedBySource|null,
     *     commitMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
