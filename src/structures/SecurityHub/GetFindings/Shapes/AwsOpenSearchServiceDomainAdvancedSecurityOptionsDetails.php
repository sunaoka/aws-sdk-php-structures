<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $InternalUserDatabaseEnabled
 * @property AwsOpenSearchServiceDomainMasterUserOptionsDetails|null $MasterUserOptions
 */
class AwsOpenSearchServiceDomainAdvancedSecurityOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     InternalUserDatabaseEnabled?: bool|null,
     *     MasterUserOptions?: AwsOpenSearchServiceDomainMasterUserOptionsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
