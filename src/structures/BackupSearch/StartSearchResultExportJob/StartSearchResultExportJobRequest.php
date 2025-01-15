<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchResultExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchJobIdentifier
 * @property Shapes\ExportSpecification $ExportSpecification
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 * @property string|null $RoleArn
 */
class StartSearchResultExportJobRequest extends Request
{
    /**
     * @param array{
     *     SearchJobIdentifier: string,
     *     ExportSpecification: Shapes\ExportSpecification,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
