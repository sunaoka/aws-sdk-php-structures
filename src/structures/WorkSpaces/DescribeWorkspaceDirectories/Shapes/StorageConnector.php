<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOME_FOLDER' $ConnectorType
 * @property 'ENABLED'|'DISABLED' $Status
 */
class StorageConnector extends Shape
{
    /**
     * @param array{
     *     ConnectorType: 'HOME_FOLDER',
     *     Status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
