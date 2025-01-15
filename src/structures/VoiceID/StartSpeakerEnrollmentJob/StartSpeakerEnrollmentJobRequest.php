<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DataAccessRoleArn
 * @property string $DomainId
 * @property Shapes\EnrollmentConfig|null $EnrollmentConfig
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property string|null $JobName
 * @property Shapes\OutputDataConfig $OutputDataConfig
 */
class StartSpeakerEnrollmentJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DataAccessRoleArn: string,
     *     DomainId: string,
     *     EnrollmentConfig?: Shapes\EnrollmentConfig|null,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     JobName?: string|null,
     *     OutputDataConfig: Shapes\OutputDataConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
