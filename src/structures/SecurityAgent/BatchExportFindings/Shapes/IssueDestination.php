<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchExportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $projectKey
 */
class IssueDestination extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     projectKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
