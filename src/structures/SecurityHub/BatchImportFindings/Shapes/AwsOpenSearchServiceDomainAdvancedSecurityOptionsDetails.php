<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $InternalUserDatabaseEnabled
 * @property AwsOpenSearchServiceDomainMasterUserOptionsDetails $MasterUserOptions
 */
class AwsOpenSearchServiceDomainAdvancedSecurityOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     InternalUserDatabaseEnabled?: bool,
     *     MasterUserOptions?: AwsOpenSearchServiceDomainMasterUserOptionsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
