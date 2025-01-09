<?php

namespace Sunaoka\Aws\Structures\CloudFront\AssociateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetDistributionId
 * @property string $Alias
 */
class AssociateAliasRequest extends Request
{
    /**
     * @param array{
     *     TargetDistributionId: string,
     *     Alias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
