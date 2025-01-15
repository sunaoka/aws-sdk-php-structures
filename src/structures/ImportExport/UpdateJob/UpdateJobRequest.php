<?php

namespace Sunaoka\Aws\Structures\ImportExport\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string $Manifest
 * @property 'Import'|'Export' $JobType
 * @property bool $ValidateOnly
 * @property string|null $APIVersion
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     Manifest: string,
     *     JobType: 'Import'|'Export',
     *     ValidateOnly: bool,
     *     APIVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
