<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeCopyProductStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED'|null $CopyProductStatus
 * @property string|null $TargetProductId
 * @property string|null $StatusDetail
 */
class DescribeCopyProductStatusResponse extends Response
{
}
