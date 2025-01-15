<?php

namespace Sunaoka\Aws\Structures\Athena\ExportNotebook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NotebookId
 * @property string|null $Name
 * @property string|null $WorkGroup
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'IPYNB'|null $Type
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class NotebookMetadata extends Shape
{
    /**
     * @param array{
     *     NotebookId?: string|null,
     *     Name?: string|null,
     *     WorkGroup?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'IPYNB'|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
