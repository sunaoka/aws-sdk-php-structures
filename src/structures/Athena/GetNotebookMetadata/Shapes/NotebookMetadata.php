<?php

namespace Sunaoka\Aws\Structures\Athena\GetNotebookMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotebookId
 * @property string $Name
 * @property string $WorkGroup
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'IPYNB' $Type
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class NotebookMetadata extends Shape
{
    /**
     * @param array{
     *     NotebookId?: string,
     *     Name?: string,
     *     WorkGroup?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Type?: 'IPYNB',
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
