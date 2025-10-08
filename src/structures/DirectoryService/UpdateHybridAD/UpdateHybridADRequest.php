<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateHybridAD;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property Shapes\HybridAdministratorAccountUpdate|null $HybridAdministratorAccountUpdate
 * @property Shapes\HybridCustomerInstancesSettings|null $SelfManagedInstancesSettings
 */
class UpdateHybridADRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     HybridAdministratorAccountUpdate?: Shapes\HybridAdministratorAccountUpdate|null,
     *     SelfManagedInstancesSettings?: Shapes\HybridCustomerInstancesSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
