<?php

namespace Sunaoka\Aws\Structures\ImportExport\GetStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property 'Import'|'Export'|null $JobType
 * @property string|null $LocationCode
 * @property string|null $LocationMessage
 * @property string|null $ProgressCode
 * @property string|null $ProgressMessage
 * @property string|null $Carrier
 * @property string|null $TrackingNumber
 * @property string|null $LogBucket
 * @property string|null $LogKey
 * @property int|null $ErrorCount
 * @property string|null $Signature
 * @property string|null $SignatureFileContents
 * @property string|null $CurrentManifest
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property list<Shapes\Artifact>|null $ArtifactList
 */
class GetStatusResponse extends Response
{
}
