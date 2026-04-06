<?php

namespace Sunaoka\Aws\Structures\Mobile\DescribeProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property bool|null $syncFromResources
 */
class DescribeProjectRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     syncFromResources?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
