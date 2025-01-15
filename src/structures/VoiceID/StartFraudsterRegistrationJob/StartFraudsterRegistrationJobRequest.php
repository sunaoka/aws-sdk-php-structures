<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartFraudsterRegistrationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DataAccessRoleArn
 * @property string $DomainId
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property string|null $JobName
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property Shapes\RegistrationConfig|null $RegistrationConfig
 */
class StartFraudsterRegistrationJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DataAccessRoleArn: string,
     *     DomainId: string,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     JobName?: string|null,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     RegistrationConfig?: Shapes\RegistrationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
