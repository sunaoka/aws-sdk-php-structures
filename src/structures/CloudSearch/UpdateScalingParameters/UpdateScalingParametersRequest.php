<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateScalingParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\ScalingParameters $ScalingParameters
 */
class UpdateScalingParametersRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ScalingParameters: Shapes\ScalingParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
