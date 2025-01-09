<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SubscribeToDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property string $DatasetName
 * @property string $DeviceId
 */
class SubscribeToDatasetRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId: string,
     *     DatasetName: string,
     *     DeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
