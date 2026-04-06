<?php

namespace Sunaoka\Aws\Structures\Account\GetGovCloudAccountInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StandardAccountId
 */
class GetGovCloudAccountInformationRequest extends Request
{
    /**
     * @param array{StandardAccountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
