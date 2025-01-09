<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PrimaryDistributionId
 * @property bool $Staging
 * @property string $IfMatch
 * @property string $CallerReference
 * @property bool $Enabled
 */
class CopyDistributionRequest extends Request
{
    /**
     * @param array{
     *     PrimaryDistributionId: string,
     *     Staging?: bool,
     *     IfMatch?: string,
     *     CallerReference: string,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
