<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteFeatureGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 */
class DeleteFeatureGroupRequest extends Request
{
    /**
     * @param array{FeatureGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
