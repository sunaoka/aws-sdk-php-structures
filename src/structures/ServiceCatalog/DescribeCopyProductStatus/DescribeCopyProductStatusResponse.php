<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeCopyProductStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED' $CopyProductStatus
 * @property string $TargetProductId
 * @property string $StatusDetail
 */
class DescribeCopyProductStatusResponse extends Response
{
}
