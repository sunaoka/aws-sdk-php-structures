<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PrimaryDistributionId
 * @property bool|null $Staging
 * @property string|null $IfMatch
 * @property string $CallerReference
 * @property bool|null $Enabled
 */
class CopyDistributionRequest extends Request
{
    /**
     * @param array{
     *     PrimaryDistributionId: string,
     *     Staging?: bool|null,
     *     IfMatch?: string|null,
     *     CallerReference: string,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
