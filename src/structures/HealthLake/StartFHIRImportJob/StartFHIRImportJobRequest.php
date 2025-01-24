<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartFHIRImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $JobName
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $JobOutputDataConfig
 * @property string $DatastoreId
 * @property string $DataAccessRoleArn
 * @property string|null $ClientToken
 */
class StartFHIRImportJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     JobOutputDataConfig: Shapes\OutputDataConfig,
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
