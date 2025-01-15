<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $StagingDistributionId
 * @property string|null $IfMatch
 */
class UpdateDistributionWithStagingConfigRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     StagingDistributionId?: string|null,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
