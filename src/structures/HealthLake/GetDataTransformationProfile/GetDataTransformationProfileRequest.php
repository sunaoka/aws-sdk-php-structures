<?php

namespace Sunaoka\Aws\Structures\HealthLake\GetDataTransformationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property int<0, 99>|null $ProfileVersion
 */
class GetDataTransformationProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ProfileVersion?: int<0, 99>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
