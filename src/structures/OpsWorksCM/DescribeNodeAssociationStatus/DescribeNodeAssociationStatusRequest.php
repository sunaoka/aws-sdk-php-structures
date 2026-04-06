<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeNodeAssociationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NodeAssociationStatusToken
 * @property string $ServerName
 */
class DescribeNodeAssociationStatusRequest extends Request
{
    /**
     * @param array{
     *     NodeAssociationStatusToken: string,
     *     ServerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
