<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartFHIRImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $JobOutputDataConfig
 * @property string $DatastoreId
 * @property string $DataAccessRoleArn
 * @property string $ClientToken
 */
class StartFHIRImportJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     JobOutputDataConfig: Shapes\OutputDataConfig,
     *     DatastoreId: string,
     *     DataAccessRoleArn: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
