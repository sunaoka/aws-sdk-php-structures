<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceFile
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED' $status
 * @property string|null $statusMessage
 * @property string|null $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $referenceId
 */
class ImportReferenceSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFile?: string|null,
     *     status: 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED',
     *     statusMessage?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     referenceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
