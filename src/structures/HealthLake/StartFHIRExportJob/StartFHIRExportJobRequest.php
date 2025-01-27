<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartFHIRExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $JobName
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DatastoreId
 * @property string $DataAccessRoleArn
 * @property string|null $ClientToken
 */
class StartFHIRExportJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DatastoreId: string,
     *     DataAccessRoleArn: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
