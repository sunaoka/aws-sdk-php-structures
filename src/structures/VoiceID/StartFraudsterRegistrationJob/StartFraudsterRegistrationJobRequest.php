<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartFraudsterRegistrationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DataAccessRoleArn
 * @property string $DomainId
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property string $JobName
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property Shapes\RegistrationConfig $RegistrationConfig
 */
class StartFraudsterRegistrationJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DataAccessRoleArn: string,
     *     DomainId: string,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     JobName?: string,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     RegistrationConfig?: Shapes\RegistrationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
