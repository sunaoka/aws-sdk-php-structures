<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MasterUserArn
 * @property string $MasterUserName
 * @property string $MasterUserPassword
 */
class AwsOpenSearchServiceDomainMasterUserOptionsDetails extends Shape
{
    /**
     * @param array{
     *     MasterUserArn?: string,
     *     MasterUserName?: string,
     *     MasterUserPassword?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
