<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceFile
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED' $status
 * @property string $statusMessage
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 * @property string $referenceId
 */
class ImportReferenceSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFile?: string,
     *     status: 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED',
     *     statusMessage?: string,
     *     name?: string,
     *     description?: string,
     *     tags?: array<string, string>,
     *     referenceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
