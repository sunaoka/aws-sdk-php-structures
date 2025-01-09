<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $StagingDistributionId
 * @property string $IfMatch
 */
class UpdateDistributionWithStagingConfigRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     StagingDistributionId?: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
