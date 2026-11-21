<?php

namespace Sunaoka\Aws\Structures\Textract\GetProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProjectArn
 * @property string $ProjectName
 * @property string|null $ProjectDescription
 * @property 'COMPLETED'|'FAILED' $Status
 * @property Shapes\ExtractionConfiguration|null $ExtractionConfiguration
 * @property Shapes\GenerativeConfiguration|null $GenerativeConfiguration
 * @property Shapes\CustomConfiguration|null $CustomConfiguration
 * @property Shapes\SplitterConfiguration|null $SplitterConfiguration
 * @property Shapes\SensitiveDataConfiguration|null $SensitiveDataConfiguration
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class GetProjectResponse extends Response
{
}
