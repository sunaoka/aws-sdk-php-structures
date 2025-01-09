<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StartICD10CMInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string $JobName
 * @property string $ClientRequestToken
 * @property string $KMSKey
 * @property 'en' $LanguageCode
 */
class StartICD10CMInferenceJobRequest extends Request
{
    /**
     * @param array{
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DataAccessRoleArn: string,
     *     JobName?: string,
     *     ClientRequestToken?: string,
     *     KMSKey?: string,
     *     LanguageCode: 'en'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
