<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DataAccessRoleArn
 * @property string $DomainId
 * @property Shapes\EnrollmentConfig $EnrollmentConfig
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property string $JobName
 * @property Shapes\OutputDataConfig $OutputDataConfig
 */
class StartSpeakerEnrollmentJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DataAccessRoleArn: string,
     *     DomainId: string,
     *     EnrollmentConfig?: Shapes\EnrollmentConfig,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     JobName?: string,
     *     OutputDataConfig: Shapes\OutputDataConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
