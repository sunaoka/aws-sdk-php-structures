<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Mrap
 */
class GetMultiRegionAccessPointRoutesRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Mrap: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
