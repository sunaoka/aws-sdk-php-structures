<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetStateTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string $description
 * @property string $signalCatalogArn
 * @property list<string> $stateTemplateProperties
 * @property list<string> $dataExtraDimensions
 * @property list<string> $metadataExtraDimensions
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 * @property string $id
 */
class GetStateTemplateResponse extends Response
{
}
