<?php

namespace Sunaoka\Aws\Structures\HealthLake\DeleteDataTransformationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 */
class DeleteDataTransformationProfileRequest extends Request
{
    /**
     * @param array{ProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
