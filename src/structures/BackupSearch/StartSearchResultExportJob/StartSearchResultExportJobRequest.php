<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchResultExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchJobIdentifier
 * @property Shapes\ExportSpecification $ExportSpecification
 * @property string $ClientToken
 * @property array<string, string> $Tags
 * @property string $RoleArn
 */
class StartSearchResultExportJobRequest extends Request
{
    /**
     * @param array{
     *     SearchJobIdentifier: string,
     *     ExportSpecification: Shapes\ExportSpecification,
     *     ClientToken?: string,
     *     Tags?: array<string, string>,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
