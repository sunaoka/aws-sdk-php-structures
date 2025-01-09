<?php

namespace Sunaoka\Aws\Structures\ImportExport\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Import'|'Export' $JobType
 * @property string $Manifest
 * @property string $ManifestAddendum
 * @property bool $ValidateOnly
 * @property string $APIVersion
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     JobType: 'Import'|'Export',
     *     Manifest: string,
     *     ManifestAddendum?: string,
     *     ValidateOnly: bool,
     *     APIVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
