<?php

namespace Sunaoka\Aws\Structures\ImportExport\GetStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'Import'|'Export' $JobType
 * @property string $LocationCode
 * @property string $LocationMessage
 * @property string $ProgressCode
 * @property string $ProgressMessage
 * @property string $Carrier
 * @property string $TrackingNumber
 * @property string $LogBucket
 * @property string $LogKey
 * @property int $ErrorCount
 * @property string $Signature
 * @property string $SignatureFileContents
 * @property string $CurrentManifest
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property list<Shapes\Artifact> $ArtifactList
 */
class GetStatusResponse extends Response
{
}
