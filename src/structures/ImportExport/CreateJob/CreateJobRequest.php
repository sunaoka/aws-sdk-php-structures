<?php

namespace Sunaoka\Aws\Structures\ImportExport\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Import'|'Export' $JobType
 * @property string $Manifest
 * @property string|null $ManifestAddendum
 * @property bool $ValidateOnly
 * @property string|null $APIVersion
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     JobType: 'Import'|'Export',
     *     Manifest: string,
     *     ManifestAddendum?: string|null,
     *     ValidateOnly: bool,
     *     APIVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
