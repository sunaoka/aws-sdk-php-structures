<?php

namespace Sunaoka\Aws\Structures\ImportExport\CreateJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'Import'|'Export' $JobType
 * @property string $Signature
 * @property string $SignatureFileContents
 * @property string $WarningMessage
 * @property list<Shapes\Artifact> $ArtifactList
 */
class CreateJobResponse extends Response
{
}
