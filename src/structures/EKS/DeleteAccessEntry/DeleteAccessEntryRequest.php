<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteAccessEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 */
class DeleteAccessEntryRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
