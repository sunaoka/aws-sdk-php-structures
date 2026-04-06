<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateAnonymousWebExperienceUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $webExperienceId
 * @property int<15, 60>|null $sessionDurationInMinutes
 */
class CreateAnonymousWebExperienceUrlRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     webExperienceId: string,
     *     sessionDurationInMinutes?: int<15, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
