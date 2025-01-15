<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProductProperties;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ProvisionedProductId
 * @property array<'OWNER'|'LAUNCH_ROLE', string>|null $ProvisionedProductProperties
 * @property string|null $RecordId
 * @property 'CREATED'|'IN_PROGRESS'|'IN_PROGRESS_IN_ERROR'|'SUCCEEDED'|'FAILED'|null $Status
 */
class UpdateProvisionedProductPropertiesResponse extends Response
{
}
