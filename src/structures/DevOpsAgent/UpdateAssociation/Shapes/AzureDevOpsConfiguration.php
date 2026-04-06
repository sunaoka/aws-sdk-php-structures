<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $organizationName
 * @property string $projectId
 * @property string $projectName
 */
class AzureDevOpsConfiguration extends Shape
{
    /**
     * @param array{
     *     organizationName: string,
     *     projectId: string,
     *     projectName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
