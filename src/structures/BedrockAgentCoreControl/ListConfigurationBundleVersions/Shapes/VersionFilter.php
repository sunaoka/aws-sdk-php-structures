<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConfigurationBundleVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $branchName
 * @property string|null $createdByName
 * @property bool|null $latestPerBranch
 */
class VersionFilter extends Shape
{
    /**
     * @param array{
     *     branchName?: string|null,
     *     createdByName?: string|null,
     *     latestPerBranch?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
