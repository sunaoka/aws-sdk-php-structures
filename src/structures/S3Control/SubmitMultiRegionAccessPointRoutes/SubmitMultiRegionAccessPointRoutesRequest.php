<?php

namespace Sunaoka\Aws\Structures\S3Control\SubmitMultiRegionAccessPointRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Mrap
 * @property list<Shapes\MultiRegionAccessPointRoute> $RouteUpdates
 */
class SubmitMultiRegionAccessPointRoutesRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Mrap: string,
     *     RouteUpdates: list<Shapes\MultiRegionAccessPointRoute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
