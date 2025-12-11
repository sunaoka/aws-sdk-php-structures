<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByConnectionFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int|null $MaxItems
 * @property string $ConnectionFunctionIdentifier
 */
class ListDistributionsByConnectionFunctionRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: int|null,
     *     ConnectionFunctionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
