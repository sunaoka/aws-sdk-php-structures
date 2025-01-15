<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MasterUserArn
 * @property string|null $MasterUserName
 * @property string|null $MasterUserPassword
 */
class AwsOpenSearchServiceDomainMasterUserOptionsDetails extends Shape
{
    /**
     * @param array{
     *     MasterUserArn?: string|null,
     *     MasterUserName?: string|null,
     *     MasterUserPassword?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
