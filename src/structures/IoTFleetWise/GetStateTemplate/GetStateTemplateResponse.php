<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetStateTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $description
 * @property string|null $signalCatalogArn
 * @property list<string>|null $stateTemplateProperties
 * @property list<string>|null $dataExtraDimensions
 * @property list<string>|null $metadataExtraDimensions
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModificationTime
 * @property string|null $id
 */
class GetStateTemplateResponse extends Response
{
}
