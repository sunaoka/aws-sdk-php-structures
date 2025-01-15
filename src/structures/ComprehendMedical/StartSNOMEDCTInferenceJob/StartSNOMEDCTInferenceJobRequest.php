<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StartSNOMEDCTInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string|null $JobName
 * @property string|null $ClientRequestToken
 * @property string|null $KMSKey
 * @property 'en' $LanguageCode
 */
class StartSNOMEDCTInferenceJobRequest extends Request
{
    /**
     * @param array{
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DataAccessRoleArn: string,
     *     JobName?: string|null,
     *     ClientRequestToken?: string|null,
     *     KMSKey?: string|null,
     *     LanguageCode: 'en'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
