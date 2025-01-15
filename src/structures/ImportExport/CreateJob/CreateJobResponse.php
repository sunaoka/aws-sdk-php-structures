<?php

namespace Sunaoka\Aws\Structures\ImportExport\CreateJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property 'Import'|'Export'|null $JobType
 * @property string|null $Signature
 * @property string|null $SignatureFileContents
 * @property string|null $WarningMessage
 * @property list<Shapes\Artifact>|null $ArtifactList
 */
class CreateJobResponse extends Response
{
}
