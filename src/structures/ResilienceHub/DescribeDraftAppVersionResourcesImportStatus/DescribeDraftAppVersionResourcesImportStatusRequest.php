<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeDraftAppVersionResourcesImportStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 */
class DescribeDraftAppVersionResourcesImportStatusRequest extends Request
{
    /**
     * @param array{appArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
