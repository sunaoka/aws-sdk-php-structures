<?php

namespace Sunaoka\Aws\Structures\CognitoSync\UnsubscribeFromDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property string $DatasetName
 * @property string $DeviceId
 */
class UnsubscribeFromDatasetRequest extends Request
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
