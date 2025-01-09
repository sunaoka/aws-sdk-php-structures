<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProductProperties;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProvisionedProductId
 * @property array<'OWNER'|'LAUNCH_ROLE', string> $ProvisionedProductProperties
 * @property string $RecordId
 * @property 'CREATED'|'IN_PROGRESS'|'IN_PROGRESS_IN_ERROR'|'SUCCEEDED'|'FAILED' $Status
 */
class UpdateProvisionedProductPropertiesResponse extends Response
{
}
